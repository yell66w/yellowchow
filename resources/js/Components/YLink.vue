<script setup>
import { computed } from "vue";
import { Link } from "@inertiajs/inertia-vue3";

const props = defineProps(["href", "active"]);

const classes = computed(() =>
    props.active
        ? "hover:text-amber-400 ease-in duration-150 text-amber-400"
        : "hover:text-amber-300 ease-in duration-150"
);
</script>

<template lang="">
    <Link :href="href" :class="classes"><slot /></Link>
</template>
