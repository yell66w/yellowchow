<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import YLink from "@/Components/YLink.vue";
import ButtonLink from "@/Components/ButtonLink.vue";
import CustomerLayout from "@/Layouts/Customer.vue";
defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Home" />
    <CustomerLayout>
        <!-- HERO -->
        <div class="flex flex-row px-12 mt-16">
            <div class="flex flex-col basis-3/6 gap-9 justify-center">
                <h1 class="text-6xl font-bold">
                    It's the food and groceries you love, delivered
                </h1>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Aspernatur magni excepturi dolorum quidem perspiciatis atque
                    obcaecati distinctio. Vero, rerum voluptatem!
                </p>
                <div>
                    <ButtonLink>Order Now</ButtonLink>
                </div>
            </div>

            <div class="flex basis-4/6 items-center justify-center">
                <img src="@/Assets/Images/hero.png" alt="" srcset="" />
            </div>
            <!-- TODO TEMPORARY FROM FOOD PANDA HEHE -->
        </div>
    </CustomerLayout>
</template>
