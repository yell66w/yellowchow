<script setup>
const props = defineProps(["href", "image"]);
</script>

<template lang="">
    <div
        class="cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300 rounded-xl shadow-md h-52 w-52 flex flex-col items-center justify-center gap-9 px-9"
    >
        <img src="@/Assets/Images/hero.png" />
        <p class="font-bold uppercase">
            <slot />
        </p>
    </div>
</template>
