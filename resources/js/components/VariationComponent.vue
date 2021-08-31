<template>
    <div>
        <div class="w-full block">
        
            <!-- <a href="#variant-view" class="w-full flex flex-col items-center bg-custom-gray text-white text-xl border-2 border-blue-600 rounded-md">
                <img class="h-32 object-contain rounded-tl-md rounded-tr-md" :src="'/assets/variants/sofa-red.jpg'" >
                <div class="w-full bg-blue-600">
                    <h3 class="text-sm py-2">Red</h3>
                </div>
            </a> -->
            
            <div @click="selectVariant([imageUrl, id, name])" class="w-full flex flex-col items-center bg-custom-gray text-xl rounded-md cursor-pointer" :class="{ 'text-white': isSelected == id,  'text-gray-800': !(isSelected == id),'border-2': isSelected == id, 'border-blue-600': isSelected == id}">
                <img class="h-32 object-contain rounded-tl-md rounded-tr-md" :alt="name" :src="'/assets/variants/' + imageUrl" >
                <div class="w-full text-center" :class="{'bg-blue-600': isSelected == id, 'bg-gray-200': !(isSelected == id), 'rounded-bl-md': !(isSelected == id), 'rounded-br-md': !(isSelected == id),}">
                    <p class="text-sm py-2 font-sans_serif">{{name}}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default ({
    props: ['id', 'name', 'imageUrl', 'isSelected'],
    data() {
        return {
        }
    },
    mounted() {
        
    },
    methods: {
        selectVariant (event) {
            this.$emit("selectVariation", event);
        }
    },
})
</script>
