<template>
    <div>
        <div class="w-full mt-10 hidden md:flex items-center">
            <div class="flex-1">
                <nav class="block md:inline">
                    <a href="" class="text-gray-600 mr-6 text-base font-cursive uppercase border-b-4 border-blue-600 hover:no-underline">the sofa</a>
                    <a href="" class="text-gray-600 mr-6 text-base font-cursive uppercase hover:border-b-4 hover:border-blue-600 hover:no-underline ">reviews</a>
                    <a href="" class="text-gray-600 text-base font-cursive uppercase hover:no-underline hover:border-b-4 hover:border-blue-600">about us</a>
                </nav>
            </div>
            <div class="flex-1">
                <div class="flex justify-center">
                    <img :src="'/assets/logo.svg'" alt="AllDay Logo" >
                </div>
            </div>
            <div class="flex-1">
                <nav class="flex flex-col md:flex-row justify-items-end md:justify-end">
                    <a href="" class="flex justify-center text-gray-600 text-base font-cursive uppercase hover:no-underline">showroom</a>
                    <a href="" class="flex justify-center text-gray-600 ml-6 text-base font-cursive uppercase hover:no-underline">swatches</a>
                </nav>
            </div>
        </div>

        <div class="w-full mt-10 flex justify-between items-center md:hidden">
            <img class="w-48" :src="'/assets/logo.svg'" >
            <i class="fa fa-bars fa-2x" v-if="!display" v-on:click="display = !display"></i>
            <i class="fa fa-close fa-2x" v-if="display" v-on:click="display = !display"></i>
        </div>
        <div class="" v-if="display">
            <nav class="flex flex-col items-end">
                <a href="" class="w-full text-right text-gray-600 text-base font-cursive uppercase border-b-4 border-blue-600 mt-4">the sofa</a>
                <a href="" class="w-full text-right text-gray-600 text-base font-cursive uppercase mt-4">reviews</a>
                <a href="" class="w-full text-right text-gray-600 text-base font-cursive uppercase mt-4">about us</a>
                <a href="" class="w-full text-right text-gray-600 text-base font-cursive uppercase mt-4">showroom</a>
                <a href="" class="w-full text-right text-gray-600 text-base font-cursive uppercase mt-4">swatches</a>
            </nav>
        </div>
        
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                display: false
            }
        },
        mounted() {},
        methods: {}
    }
</script>
