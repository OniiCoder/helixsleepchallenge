<template>
    <div>
        <div class="flex justify-between">
            <div>
                <a name="variant-view"></a>
                <span class="flex items-end text-xs md:text-sm text-gray-700">
                    <div class="flex items-center">
                        <img class="mr-1.5 w-2.5 md:w-3" :src="'/assets/padlock.svg'" alt="Padlock icon" >
                        Secure Checkout
                    </div>
                </span>
            </div>

            <span class="flex items-end text-xs md:text-sm text-gray-700">
            Ships in 5-7 Business Days
            </span>
        </div>
        <div class="flex justify-center">
            <img class="sticky top-0 object-contain w-full h-auto mt-20" :class="{'hidden': !imageLoaded}" :alt="imageUrl" :src="'/assets/variants/' + imageUrl" >
            <img class="w-46 h-46" :class="{'hidden': imageLoaded}" :alt="imageUrl" :src="'/assets/variants/loader.gif'" >
        </div>
    </div>
</template>

<script>
    export default {
        props: ['imageUrl', 'imageLoaded'],
        data: function () {
            return {}
        },
        mounted() {},
        methods: {}
    }
</script>
