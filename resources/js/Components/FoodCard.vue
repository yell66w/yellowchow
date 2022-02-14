<script setup>
const props = defineProps(["href", "image", "desc", "price"]);
</script>

<template lang="">
    <div
        class="mt-6 cursor-pointer rounded-xl h-56 flex flex-col items-start justify-center gap-6"
    >
        <img src="@/Assets/Images/hero.png" />

        <div>
            <p class="font-bold uppercase">
                <slot />
            </p>
            <p class="text-xs text-gray-500 capitalize">
                {{ desc ? desc : "lorem ipsum sichi henge." }}
            </p>
        </div>

        <div class="flex flex-row justify-between items-center w-full">
            <p class="font-bold capitalize">₱{{ price ? price : "200.00" }}</p>
            <button
                class="hover:bg-amber-500 hover:text-white ease-linear duration-200 border border-amber-500 rounded-full text-amber-500 text-sm px-6 py-2"
            >
                Buy Now
            </button>
        </div>
    </div>
</template>
