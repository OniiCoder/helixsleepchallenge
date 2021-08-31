<template>

<div>
    <h1 class="text-blue text-base text-blue-800 font-cursive uppercase mt-6">1. choose a fabric</h1>
        <p class="text-gray text-base text-gray-700 font-sans_serif mt-1">
            Choose your choice from fabrics to leather.
        </p>

        <h1 class="text-base text-gay-600 font-bold mt-6">Fabric choices</h1>

        <div class="mt-3 mb-20">
            <div class="grid grid-cols-3 gap-2 md:gap-12 lg:gap-4">
                <div v-bind:key="variation.id" v-for="variation in variations">
                    <variation-component :id="variation.id" :name="variation.name" :imageUrl="variation.image_url" @selectVariation="changeProductImage" :isSelected="selectedId"></variation-component>
                </div>
            </div>
        </div>
</div>
</template>

<script>
import VariationComponent from './VariationComponent.vue'
import axios from 'axios'
    export default {
        emits: ["selectVariation", "selectedId"],
        components: { VariationComponent },
        props: ['variations', 'selectedId'],
        data: function () {
            return {
            }
        },
        mounted() {
            // this.loadVariations();
        },
        methods: {
            changeProductImage (event) {
                this.$emit("selectVariation", event);
                // this.selectedId = event[1];
            },
            // loadVariations () {
            //     axios.get('/api/variations')
            //     .then((response) => {
            //         this.variations = response.data.data;
            //         this.selectedId = response.data.data[0].id
            //         this.$emit("selectVariation", [response.data.data[0].image_url]);
            //     })
            //     .catch(function (error) {
            //         console.log(error);
            //     });
            // },
        }
    }
</script>
