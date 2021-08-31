<template>
    <div class="mt-7 lg:mt-0">
        <h1 class="text-blue text-4xl text-blue-800 font-cursive uppercase" v-if="product != null">{{ product.name }}</h1>
        <p class="text-gray text-base text-gray-700 font-sans_serif mt-1" v-if="product != null">
            {{ product.description }}
        </p>
        <div class="flex divide-x-4 divide-white mt-7">
            <div class="flex-1">
                <div class="">
                    <p class="text-center text-l text-gray-700">Pay Now</p>
                    <h2 class="text-center text-2xl md:text-4xl text-red-700 font-bold " v-if="product != null">${{ formatPrice(product.price) }}</h2>
                    <p class="text-center text-l md:text-xl text-gray-700 line-through" v-if="product != null">${{ formatPrice(product.price - product.discount) }}</p>
                    <p class="text-center text-xs text-gray-700" v-if="product != null">${{ product.discount }} OFF with code</p>
                </div>
            </div>
            <div class="flex-1">
                <div class="">
                    <p class="text-center text-l text-gray-700">Pay as low as</p>
                    <p class="text-center text-2xl md:text-4xl text-red-700 font-bold ">$25<span class="text-sm">/month</span></p>
                    <p class="text-center text-l md:text-xl text-gray-700">with Klarna</p>
                    <p class="text-center text-xs text-gray-700 underline">Learn More</p>
                </div>
            </div>
        </div>
        <div class="mt-2">
            <button class="w-full bg-blue-600 hover:bg-blue-500 text-white text-l md:text-xl py-2.5 px-4 mt-7 font-cursive rounded-md">add to cart</button>
        </div>
        <div class="flex flex-col items-center mt-3 mb-10">
            <a href="" class="text-gray-600 text-sm font-cursive uppercase underline blue-underline">save design for later</a>
        </div>
    </div> 
</template>
<script>

export default ({
    props: ['product'],
    data() {
        return {
            
        }
    },
    methods: {
        formatPrice(value) {
            let val = (value/1).toFixed(0).replace('.', ',')
            return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        }
    },
})
</script>
