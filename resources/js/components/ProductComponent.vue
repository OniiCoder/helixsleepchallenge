<template>

<div>
    <div class="container">
        <header-component></header-component>

        <div class="flex flex-wrap mt-8 md:mt-16" ref="coverSection">
            <div class="w-full lg:w-4/6 block md:pr-10">
                <product-image-component :imageUrl="imageUrl" :imageLoaded="imageLoaded"></product-image-component>
                <bottom-icons-component></bottom-icons-component>
            </div>
            <div class="w-full lg:w-2/6 divide-y-4 divide-white">
                <product-details-component :product="product"></product-details-component>
                <div class="">
                    <variations-component @selectVariation="changeProductImage" v-if="product != null" :variations="product.variation" :selectedId="selectedId"></variations-component>
                </div>
            </div>
            
        </div>

    </div>
</div>
</template>

<script>
import BottomIconsComponent from './BottomIconsComponent.vue';
import HeaderComponent from './HeaderComponent.vue';
import ProductImageComponent from './ProductImageComponent.vue';
import ProductDetailsComponent from './ProductDetailsComponent.vue';
import VariationsComponent from './VariationsComponent.vue';
import axios from 'axios'
    export default {
  components: { BottomIconsComponent, HeaderComponent, ProductImageComponent, VariationsComponent, ProductDetailsComponent },
        data: function () {
             return {
                product: null,
                imageLoaded: false,
                imageUrl: 'loader.gif',
                selectedId: 1
            }
        },
        mounted() {
            this.loadProducts();
        },
        methods: {
            changeProductImage(event) {
                this.imageUrl = event[0];
                this.selectedId = event[1]
                this.imageLoaded = true;

                this.goto();
                
            },
            loadProducts: function () {
                axios.get('/api/products/1')
                .then((response) => {
                    this.product = response.data.data;
                    if(response.data.data != null) {
                        if(response.data.data.variation != null) {
                            if(response.data.data.variation.length > 0) {
                                this.selectedId = response.data.data.variation[0].id;
                                this.imageUrl = response.data.data.variation[0].image_url;
                                this.imageLoaded = true;
                                // this.$emit("selectVariation", [response.data.data.variation[0].image_url]);
                            }
                        }
                    }
                
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            goto() {
                var element = this.$refs['coverSection'];
                var top = element.offsetTop;
                window.scrollTo(0, top);
            }
        }
    }
</script>
