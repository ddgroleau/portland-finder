
<script setup lang="ts">
import { Head } from '@inertiajs/vue3'
import type Location from "@/models/Location.ts";
import Layout from "@/components/Layout.vue";
import "leaflet/dist/leaflet.css";
import { ref } from 'vue';
import type { Ref } from 'vue';
import { LMap, LMarker, LTileLayer, LPopup } from "@vue-leaflet/vue-leaflet";
import axios from "axios";
// @ts-ignore
import { icon } from "leaflet";
import WarningModal from "@/components/WarningModal.vue";

const props = defineProps<{ locations : Location[] }>();
type MarkerElements = typeof LMarker | null;
const INITIAL_ZOOM = 12;
const INITIAL_COORDS = [43.6594727, -70.2574153];
const zoom = ref(INITIAL_ZOOM);
const userCoords = ref(INITIAL_COORDS);
const center = ref(INITIAL_COORDS);
const loading = ref(true);
const stores = ref(props.locations);
const displayCount = ref(5);
const optedIn = ref(false);
const userMarkerText = ref("You are here!")
const markers: Ref<MarkerElements[]> = ref([]);
const activeMarker = ref(null);

const setMarkerRef = (index: number) => (el: MarkerElements) => markers.value[index] = el;
const toCoords = (location:Location) =>[ location.latitude ?? 0, location.longitude ?? 0 ];
const setOptedIn = (val:boolean) => optedIn.value = val;
const focusOnLocation = (newZoom:number, location:Location, index: number = -1) => {
    center.value = toCoords(location);

    const markerComponent = markers.value[index];
    if (markerComponent) {
        const marker =  markerComponent?.leafletObject._icon;
        marker.scrollIntoView({ behavior: 'smooth', block: 'end' });
        if(activeMarker.value !== marker) {
            activeMarker.value = marker;
            marker.click();
        }
    }

    setTimeout(()=>{
        zoom.value = newZoom;
    },350);
}
const formatPhoneNumber = (phoneNumber: string): string => {
    const cleaned = phoneNumber.replace(/\D/g, ''); // Remove non-numeric characters
    const match = cleaned.match(/^(\d{3})(\d{3})(\d{4})$/);
    if (match) return `(${match[1]}) ${match[2]}-${match[3]}`;
    return phoneNumber;
}
const getDirectionsUri = (originLat:number, originLng:number,location:Location) => {
    const completeAddress = `${location.streetAddress}, ${location.city} ${location.state} ${location.zipCode}`
    const directionsLink = new URL("https://www.google.com/maps/dir/");
    directionsLink.searchParams.set("api","1");
    directionsLink.searchParams.append("origin",`${originLat},${originLng}`);
    directionsLink.searchParams.append("destination",completeAddress);
    return directionsLink;
}
const handleDisplayCountChange = () => {
    zoom.value = INITIAL_ZOOM;
    center.value = userCoords.value;
}
const geolocateSuccess = async (data:GeolocationPosition) => {
    userCoords.value = [data.coords.latitude, data.coords.longitude];
    center.value = [data.coords.latitude, data.coords.longitude];
    let newLocations = await axios.get(`/api/locations/${data.coords.latitude},${data.coords.longitude}`);
    stores.value = newLocations.data;
    loading.value = false;
}
const geolocateFailure = async () => {
    loading.value = false;
    userMarkerText.value = "Portland City Hall"
    console.error("Error fetching coords");
    let newLocations = await axios.get(`/api/locations/${userCoords.value[0]},${userCoords.value[1]}`);
    stores.value = newLocations.data;
}

const geo = navigator.geolocation;
if (!geo) {
    userMarkerText.value = "Portland City Hall"
    console.error('Geolocation is not supported');
} else {
    loading.value = true;
    geo.getCurrentPosition(geolocateSuccess,geolocateFailure);
}
</script>

<template>
    <Layout>
        <Head title="Find City Trash Bag Vendors Near You in Portland, Maine" />
        <div class="flex flex-col items-center w-screen">
            <div class="flex flex-wrap items-center justify-center gap-x-8 mb-8 lg:mb-0">
                <h1 class="py-8 font-semibold text-2xl text-center">Find City Trash Bag Vendors in Portland, ME</h1>
                <select v-model="displayCount" @change="handleDisplayCountChange" class="z-[999] h-10 w-64 indent-2 bg-white rounded-2xl border border-slate-800 shadow">
                    <option value="5">Show Closest (5) Vendors</option>
                    <option value="10">Show Closest (10) Vendors</option>
                    <option value="15">Show Closest (15) Vendors</option>
                    <option value="25">Show Closest (25) Vendors</option>
                    <option :value="stores.length">Show All ({{ stores.length }}) Vendors</option>
                </select>
            </div>
            <section :class="'flex flex-wrap lg:flex-nowrap min-w-screen rounded ' + (!loading ? 'border border-slate-800' : '')">
                <div :class="'w-screen h-[50vh] lg:min-w-[1000px] lg:min-h-[800px] lg:w-[1000px] lg:h-[800px] ' + (loading ? 'bg-slate-800 flex justify-center items-center' : 'fade-in')">
                    <div class="flex flex-col gap-y-12 items-center" v-if="loading">
                        <div class="border-8 border-white h-24 w-24 rounded-full animate-bounce p-4">
                            <img src="/assets/Icons8_flat_full_trash.png" alt="Trash can icon"/>
                        </div>
                        <h2 class="text-white text-xl max-w-xs lg:max-w-2xl text-center">Searching for Portland Trash Bag Vendors...</h2>
                    </div>
                    <l-map ref="map" v-model:zoom="zoom" :center="center" :useGlobalLeaflet="false" v-if="!loading">
                        <l-tile-layer
                            url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
                            layer-type="base"
                            name="OpenStreetMap"
                        >
                        </l-tile-layer>
                        <l-marker :lat-lng="userCoords">
                            <l-popup>
                                📍 {{ userMarkerText }}
                            </l-popup>
                        </l-marker>
                        <div v-for="(store,index) in stores.slice(0,displayCount)">
                            <l-marker :ref="setMarkerRef(index)" :lat-lng="toCoords(store)" @click="focusOnLocation(16,store)" :icon="icon({
                                iconUrl:'/assets/Icons8_flat_full_trash.png',
                                iconSize: [32, 37],
                                iconAnchor: [16, 8]
                            })">
                                <l-popup>
                                    <div class="flex flex-col gap-y-2">
                                        <strong class="mb-2">{{ store.name }}</strong>
                                        <i class="mb-1">✔️ {{ store.distance }} mile(s) away</i>
                                        <span>{{ store.streetAddress }}</span>
                                        <span class="mb-1">{{ store.city }}, {{ store.state }}, {{ store.zipCode }}</span>
                                        <a class="underline" :href="'tel:1' + store.phoneNumber">{{ formatPhoneNumber(store.phoneNumber ?? "") }}</a>
                                        <a class="underline" target="_blank" :href="getDirectionsUri(userCoords[0],userCoords[1],store)">Get Directions</a>
                                    </div>
                                </l-popup>
                            </l-marker>
                        </div>
                    </l-map>
                </div>
                <div class="w-full">
                    <ol v-if="!loading" class="fbg-white fade-in list-decimal pl-6 flex flex-col gap-y-6 p-4 w-full lg:max-h-[800px] scrollbar lg:overflow-scroll">
                        <li class="flex flex-col list" v-for="(store,index) in stores.slice(0,displayCount)">
                            <strong @click="focusOnLocation(16,store,index)" class="mb-2 cursor-pointer">{{ stores.indexOf(store) + 1 }}) <span class="underline">{{ store.name }}</span></strong>
                            <i class="mb-1">✔️ {{ store.distance }} mile(s) away</i>
                            <span>{{ store.streetAddress }}</span>
                            <span class="mb-1">{{ store.city }}, {{ store.state }}, {{ store.zipCode }}</span>
                            <a class="underline" :href="'tel:1' + store.phoneNumber">{{ formatPhoneNumber(store.phoneNumber ?? "") }}</a>
                            <a class="underline" target="_blank" :href="getDirectionsUri(userCoords[0],userCoords[1],store)">Get Directions</a>
                        </li>
                    </ol>
                </div>
            </section>
        </div>
    <warning-modal :opted-in="optedIn" :set-opted-in="setOptedIn" />
    </Layout>
</template>

