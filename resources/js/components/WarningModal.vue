<script setup lang="ts">
defineProps<{optedIn: boolean,setOptedIn: (val:boolean)=>void}>();
</script>

<template>
    <div v-if="!optedIn" class="fixed top-1 lg:top-0 bottom-0 left-0 right-0 w-screen h-screen flex items-center justify-center z-[1000] backdrop-blur-sm">
        <div class="flex flex-col p-8 bg-slate-600 border border-white rounded text-white lg:text-2xl gap-y-2 max-w-2xl m-4">
            <p>This app is not affiliated with, or endorsed by, the city of Portland, ME or any other government, civil, or business entity.</p>
            <p>
                This data was last updated 1/3/2024, using city-provided information
                found <a href="https://www.portlandmaine.gov/556/Trash" target="_blank" class="underline">here</a>.
            </p>
            <p>
                Before using this app, please review the <a class="underline" target="_blank" href="/terms-of-service">Terms of Service</a> and <a class="underline" target="_blank" href="/privacy-policy">Privacy Policy</a>.
            </p>
            <div class="flex py-4 gap-8 flex-wrap justify-center mt-4">
                <button @click="()=>setOptedIn(true)" class="py-2 px-4 bg-green-400 rounded text-black">I understand</button>
                <a href="javascript: history.back()" class="py-2 px-4 bg-red-400 rounded text-black">Go Back</a>
            </div>
        </div>
    </div>
</template>
