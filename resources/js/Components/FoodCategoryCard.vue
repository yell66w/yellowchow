<script setup>
const props = defineProps(["href", "image"]);
</script>

<template lang="">
    <div
        class="grow cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300 rounded-xl shadow-md h-56 w-56 flex flex-col items-center justify-center gap-9 px-9"
    >
        <img
            class="h-20 object-cover"
            :src="'images/' + image"
            alt=""
            srcset=""
        />
        <p class="font-bold uppercase">
            <slot />
        </p>
    </div>
</template>
