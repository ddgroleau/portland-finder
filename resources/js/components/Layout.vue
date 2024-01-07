<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <main class="flex flex-grow w-full h-full overflow-x-hidden">
        <slot />
    </main>
    <footer class="flex w-full p-4 justify-center">
        ©{{ new Date().getFullYear() }}&nbsp;<a href="/" class="underline">Portland Finder App</a>&nbsp;&nbsp;
        |&nbsp;&nbsp;<a class="underline" href="mailto:ddgroleau.developer@gmail.com">Email Me</a>&nbsp;&nbsp;|
        &nbsp;&nbsp;<a class="underline" target="_blank" href="/terms-of-service">Terms of Service</a>&nbsp;&nbsp;|
        &nbsp;&nbsp;<a class="underline" target="_blank" href="/privacy-policy">Privacy Policy</a>
    </footer>
</template>
