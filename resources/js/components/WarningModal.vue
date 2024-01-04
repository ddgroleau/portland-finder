<script setup lang="ts">
defineProps<{optedIn: boolean}>();
</script>

<template>
    <div v-if="!optedIn" class="fixed top-0 bottom-0 left-0 right-0 w-screen h-screen flex items-center justify-center z-[1000] backdrop-blur-sm">
        <div class="flex flex-col p-8 bg-black text-white lg:text-2xl gap-y-4 max-w-2xl m-4">
            <h2 class="mb-4 text-center text-2xl lg:text-4xl font-bold">WARNING</h2>
            <p>This app is not affiliated with, or endorsed by, the city of Portland, ME or any other government, civil, or business entity.</p>
            <strong>THIS APP IS NOT TO BE USED BY ANYONE, EVER!</strong>
            <p>The data in this app could be outdated or wholly inaccurate.
                This data was last updated 1/3/2024, using city-provided information
                found <a href="https://www.portlandmaine.gov/556/Trash" target="_blank" class="underline">here</a>.
            </p>
            <p>
                If you continue to use this app, <strong>DESPITE THE OBVIOUS PERIL,</strong> please note the following:
            </p>
            <i>
                Your location data may be stored in a database, but will
                not be sold to or shared with anyone besides the app creator... and maybe his wife, who won't care.
            </i>
            <div class="flex py-4 gap-8 flex-wrap justify-center mt-4">
                <button @click="()=>optedIn = true" class="py-2 px-4 bg-green-400 rounded text-black">I understand the peril</button>
                <a href="javascript: history.back()" class="py-2 px-4 bg-red-400 rounded text-black">Too perilous for me</a>
            </div>
        </div>
    </div>
</template>
