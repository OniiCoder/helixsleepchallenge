<template>
    <div>
        <div class="grid grid-cols-6 gap-4 items-center">
            <img class="" :src="'/assets/free-shipping.svg'" alt="Free shipping icon">
            <img class="" :src="'/assets/trial.svg'" alt="Trial">
            <img class="" :src="'/assets/made-in-america.svg'" alt="Made in america">
            <img class="" :src="'/assets/warranty.svg'" alt="Warranty">
            <img class="" :src="'/assets/assembly.svg'" alt="Super easy assembly">
            <img class="" :src="'/assets/materials.svg'" alt="High quality materials">
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                variations: [],
                products: []
            }
        },
        mounted() {},
        methods: {}
    }
</script>
