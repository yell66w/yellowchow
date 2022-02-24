<script setup>
const props = defineProps(["href", "image"]);
</script>

<template lang="">
    <div
        class="w-full cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300 rounded-xl shadow-md h-full py-10 flex flex-col items-center justify-center gap-9 px-9"
    >
        <img
            class="h-10 lg:h-20 object-cover"
            :src="'images/' + image"
            alt=""
            srcset=""
        />
        <p class="font-bold uppercase">
            <slot />
        </p>
    </div>
</template>
