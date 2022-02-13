<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import YLink from "@/Components/YLink.vue";
</script>

<template>
    <div>
        <!-- NAVBAR -->
        <div class="flex flex-row justify-between py-6 px-12">
            <div>
                <h1 class="font-bold text-2xl">
                    <span class="text-amber-400">YELLOW</span>CHOW
                </h1>
            </div>
            <div class="flex gap-10 font-semibold">
                <YLink :href="route('home')" :active="route().current('home')">
                    Home</YLink
                >
                <YLink
                    :href="route('restaurants')"
                    :active="route().current('restaurants')"
                >
                    Restaurants</YLink
                >
                <YLink
                    :href="route('about')"
                    :active="route().current('about')"
                >
                    About</YLink
                >
                <YLink
                    :href="route('contact')"
                    :active="route().current('contact')"
                >
                    Contact</YLink
                >
            </div>
            <div>
                <button
                    class="bg-amber-400 font-bold text-white px-9 py-2 rounded-full"
                >
                    Login
                </button>
            </div>
        </div>
        <!-- NAVBAR -->
        <slot />
    </div>
</template>
