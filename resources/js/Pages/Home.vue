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
    menuItems: Array,
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

        <!-- Food Category Cards-->
        <div class="mt-10 gap-6 pl-36 grid grid-cols-6">
            <FoodCategoryCard image="breakfast.png">Breakfast</FoodCategoryCard>
            <FoodCategoryCard image="chicken.png">Chicken</FoodCategoryCard>
            <FoodCategoryCard image="beef.png">Beef</FoodCategoryCard>
            <FoodCategoryCard image="dessert.png">Dessert</FoodCategoryCard>
            <FoodCategoryCard image="beverages.png">Beverages</FoodCategoryCard>
            <div class="relative w-10 hidden lg:block">
                <div
                    class="cursor-pointer absolute hidden lg:flex bg-neutral-900 left-0 top-24 text-white w-10 h-10 items-center justify-center font-bold rounded-full"
                >
                    >
                </div>
            </div>
        </div>
        <!-- Food Cards-->
        <hr class="my-20" />

        <!-- <Menu
            title="All Time Favorites"
            desc="Discover your new favorites here!"
        >
            <FoodCard>Burger</FoodCard>
            <FoodCard>Tacos</FoodCard>
            <FoodCard>Pasta</FoodCard>
            <FoodCard>Steak</FoodCard>
            <FoodCard>Dessert</FoodCard>
        </Menu> -->

        <!-- <hr class="my-20" /> -->

        <!-- <Menu title="Best Deals" desc="Discover your new favorites here!">
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

        <hr class="my-20" /> -->

        <Menu more title="All Meals" desc="Discover your new favorites here!">
            <FoodCard
                v-for="menuItem in menuItems"
                :key="menuItem.id"
                :price="menuItem.price"
                :category="menuItem.category"
                >{{ menuItem.name }}</FoodCard
            >
        </Menu>
    </CustomerLayout>
</template>
