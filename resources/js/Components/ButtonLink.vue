<script setup>
import { Link } from "@inertiajs/inertia-vue3";
const props = defineProps(["href"]);
</script>

<template>
    <Link
        as="button"
        :href="href"
        class="ease-linear duration-200 hover:bg-yellow-400 bg-amber-400 font-bold text-white px-9 py-2 rounded-full"
    >
        <slot />
    </Link>
</template>
