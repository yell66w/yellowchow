<script setup>
import ButtonLink from "@/Components/ButtonLink.vue";

defineProps({
    more: Boolean,
    title: String,
    desc: String,
});
</script>

<template lang="">
    <div class="px-36">
        <h2 class="text-3xl font-bold uppercase">{{ title }}</h2>
        <p>{{ desc }}</p>

        <div class="grid grid-cols-5 mt-10 gap-10">
            <slot />
        </div>

        <div v-if="more" class="mt-20 items-center justify-center flex">
            <ButtonLink>See More</ButtonLink>
        </div>
    </div>
</template>
