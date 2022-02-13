<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import YLink from "@/Components/YLink.vue";
</script>

<template>
    <div class="h-screen">
        <!-- NAVBAR -->
        <div class="flex flex-row justify-between py-6 px-36">
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
                <Link
                    as="button"
                    :href="route('login')"
                    class="ease-linear duration-200 hover:bg-yellow-400 bg-amber-400 font-bold text-white px-9 py-2 rounded-full"
                >
                    Login
                </Link>
            </div>
        </div>
        <!-- NAVBAR -->
        <slot />

        <div
            class="mt-10 bg-neutral-900 text-white py-6 items-center justify-center text-center"
        >
            <h1>Yellow Chow &copy; {{ new Date().getFullYear() }}</h1>
        </div>
    </div>
</template>
