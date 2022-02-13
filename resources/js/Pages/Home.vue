<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import YLink from "@/Components/YLink.vue";
import BasicFoodCard from "@/Components/BasicFoodCard.vue";
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
        <div class="flex flex-row px-36 mt-20 gap-10">
            <div class="flex flex-col basis-3/6 gap-9 justify-center">
                <!-- TODO TEMPORARY FROM FOOD PANDA HEHE -->
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
        </div>
        <!-- HERO -->

        <!-- Food Cards-->
        <div
            class="mt-10 flex flex-row gap-10 px-36 flex-wrap items-center justify-center"
        >
            <BasicFoodCard>Burger</BasicFoodCard>
            <BasicFoodCard>Tacos</BasicFoodCard>
            <BasicFoodCard>Pasta</BasicFoodCard>
            <BasicFoodCard>Steak</BasicFoodCard>
            <BasicFoodCard>Dessert</BasicFoodCard>
        </div>

        <!-- Food Cards-->
    </CustomerLayout>
</template>
