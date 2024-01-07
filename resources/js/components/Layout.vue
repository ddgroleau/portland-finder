<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <main class="flex flex-grow w-full h-full overflow-x-hidden">
        <slot />
    </main>
    <footer class="flex w-full p-4 justify-center">
        ©{{ new Date().getFullYear() }} Portland Finder App | &nbsp;<a class="underline" href="mailto:ddgroleau.developer@gmail.com">Email Me</a>
    </footer>
</template>
