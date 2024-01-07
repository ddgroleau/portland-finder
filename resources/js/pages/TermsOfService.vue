<script setup lang="ts">
import {Head} from "@inertiajs/vue3";
import Layout from "@/components/Layout.vue";
</script>

<template>
    <Layout>
        <Head title="Terms of Service | Portland Finder" />
        <div class="flex flex-col gap-2 p-4 max-w-screen-md">
            <h1 class="font-bold text-xl">Portland Finder - Terms of Service</h1>
            <p>Welcome to the Portland Finder  App ("the App"). By using the App, you agree to comply with and be bound by the following terms and conditions. Please read them carefully.</p>
            <h2 class="font-semibold text-lg mt-2">1. Location Services</h2>
            <p>The App utilizes the geolocation feature provided by your device through the browser's `navigator.geolocation` API to determine your current location. By using the App, you consent to the collection and use of this information.</p>
            <h2 class="font-semibold text-lg mt-2">2. Data Storage</h2>
            <p>The App may store your device's geolocation data in a secure database for the purpose of providing you with relevant information about nearby trash bag vendors. This information will be used solely for the intended functionality of the App and will not be shared with third parties without your explicit consent.</p>
            <h2 class="font-semibold text-lg mt-2">3. User Responsibilities</h2>
            <p>You agree to use the App responsibly and not engage in any activities that may compromise the security or integrity of the App, its users, or the data stored in the database.</p>
            <h2 class="font-semibold text-lg mt-2">4. Disclaimer</h2>
            <p>The App is provided "as is" without any warranties, express or implied. The developers of the App are not responsible for any damages or losses that may result from the use or inability to use the App.</p>
            <h2 class="font-semibold text-lg mt-2">5. Changes to Terms</h2>
            <p>We reserve the right to update or change these Terms of Service at any time. Any changes will be effective immediately upon posting on this page.</p>
            <h2 class="font-semibold text-lg mt-2">6. Contact Information</h2>
            <p>If you have any questions or concerns about these Terms of Service, please contact me at <a href="mailto:ddgroleau.developer@gmail.com">ddgroleau.developer@gmail.com</a>.</p>
        </div>
        </Layout>
</template>

