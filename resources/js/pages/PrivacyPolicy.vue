<script setup lang="ts">

import Layout from "@/components/Layout.vue";
import {Head} from "@inertiajs/vue3";
</script>

<template>
    <Layout>
        <Head title="Privacy Policy | Portland Finder" />
        <div class="flex flex-col gap-2 p-4 max-w-screen-md">
            <h1 class="font-bold text-xl">Portland Finder App - Privacy Policy</h1>
            <p>This Privacy Policy outlines how your information is collected, used, and disclosed when you use the Portland Finder App ("the App"). By using the App, you agree to the terms outlined in this policy.</p>
            <h2 class="font-semibold text-lg mt-2">1. Information Collected</h2>
            <p>The App collects your device's geolocation data through the browser's `navigator.geolocation` API to determine your current location. This information is used to display a map of city trash bag vendors relative to your location.</p>
            <h2 class="font-semibold text-lg mt-2">2. Data Storage</h2>
            <p>Your device's geolocation data may be stored in a secure database for the sole purpose of providing you with relevant information about nearby trash bag vendors. This information will not be shared with third parties without your explicit consent.</p>
            <h2 class="font-semibold text-lg mt-2">3. Security</h2>
            <p>I take reasonable measures to protect your information from unauthorized access or disclosure. However, no method of transmission over the internet or electronic storage is 100% secure, and I cannot guarantee absolute security.</p>
            <h2 class="font-semibold text-lg mt-2">4. Changes to Privacy Policy</h2>
            <p>I reserve the right to update or change this Privacy Policy at any time. Any changes will be effective immediately upon posting on this page.</p>
            <h2 class="font-semibold text-lg mt-2">5. Contact Information</h2>
            <p>If you have any questions or concerns about this Privacy Policy, please contact me at <a href="mailto:dan@dangroleauwebdevelopment.com">dan@dangroleauwebdevelopment.com</a>.</p>
        </div>
    </Layout>
</template>
