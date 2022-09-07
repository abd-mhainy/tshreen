<template>
    <div class="one_third_column one_third_var2">
        <div class="scale_image_container">
            <SliderItemContent :item="items[0]"></SliderItemContent>
        </div>
        <div class="scale_image_container r_image_container">
            <SliderItemContent :item="items[1]"></SliderItemContent>
        </div>
    </div>
</template>

<script>
import SliderItemContent from './SliderItemContent.vue';
export default {
    props: {
        items: Array,
    },
    components: { SliderItemContent }
}
</script>

<style scoped lang="scss">
    .one_third_column:deep() img {
        aspect-ratio: 1.48;
    }
</style>