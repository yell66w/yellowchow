<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import YLink from "@/Components/YLink.vue";
import FoodCategoryCard from "@/Components/FoodCategoryCard.vue";
import FoodCard from "@/Components/FoodCard.vue";
import ButtonLink from "@/Components/ButtonLink.vue";
import Menu from "@/Components/Menu.vue";
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
            class="relative mt-10 flex flex-row gap-10 px-36 flex-nowrap items-center"
        >
            <FoodCategoryCard>Burger</FoodCategoryCard>
            <FoodCategoryCard>Tacos</FoodCategoryCard>
            <FoodCategoryCard>Pasta</FoodCategoryCard>
            <FoodCategoryCard>Steak</FoodCategoryCard>
            <FoodCategoryCard>Dessert</FoodCategoryCard>
            <!-- <div
                class="hover:bg-neutral-800 bg-neutral-900 text-white rounded-full w-8 h-8 items-center justify-center flex font-bold cursor-pointer"
            >
                >
            </div> -->
        </div>
        <!-- Food Cards-->
        <hr class="my-20" />

        <Menu
            title="All Time Favorites"
            desc="Discover your new favorites here!"
        >
            <FoodCard>Burger</FoodCard>
            <FoodCard>Tacos</FoodCard>
            <FoodCard>Pasta</FoodCard>
            <FoodCard>Steak</FoodCard>
            <FoodCard>Dessert</FoodCard>
        </Menu>

        <hr class="my-20" />

        <Menu title="Best Deals" desc="Discover your new favorites here!">
            <FoodCard>Burger</FoodCard>
            <FoodCard>Tacos</FoodCard>
            <FoodCard>Pasta</FoodCard>
            <FoodCard>Steak</FoodCard>
            <FoodCard>Dessert</FoodCard>
            <FoodCard>Dessert</FoodCard>
            <FoodCard>Dessert</FoodCard>
            <FoodCard>Dessert</FoodCard>
            <FoodCard>Dessert</FoodCard>
            <FoodCard>Dessert</FoodCard>
        </Menu>

        <hr class="my-20" />

        <Menu more title="All Meals" desc="Discover your new favorites here!">
            <FoodCard>Burger</FoodCard>
            <FoodCard>Tacos</FoodCard>
            <FoodCard>Pasta</FoodCard>
            <FoodCard>Steak</FoodCard>
            <FoodCard>Dessert</FoodCard>
            <FoodCard>Dessert</FoodCard>
            <FoodCard>Dessert</FoodCard>
            <FoodCard>Dessert</FoodCard>
            <FoodCard>Dessert</FoodCard>
            <FoodCard>Dessert</FoodCard>
        </Menu>
    </CustomerLayout>
</template>
