<template>
    <div class="two_third_column">
        <div class="scale_image_container">
            <SliderItemContent :item="item"></SliderItemContent>
        </div>
    </div>
</template>

<script>
import SliderItemContent from './SliderItemContent.vue';
export default {
    props: {
        item: Object,
    },
    components: { SliderItemContent }
}
</script>

<style scoped lang="scss">
    .two_third_column:deep() img {
        aspect-ratio: 1.44;
    }
</style>
