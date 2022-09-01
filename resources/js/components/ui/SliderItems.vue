<template>
    <div class="item">
        <TwoThirdColumn :item="items[0]"></TwoThirdColumn>
        <OneThirdColumn :items="[items[1], items[2]]"></OneThirdColumn>
        <OneThirdColumn :items="[items[3], items[4]]"></OneThirdColumn>
    </div>
</template>

<script>
import SliderItemContent from './SliderItemContent.vue';
import TwoThirdColumn from './TwoThirdColumn.vue';
import OneThirdColumn from './OneThirdColumn.vue';
export default {
    props: {
        items: Array,
    },
    components: { SliderItemContent, TwoThirdColumn, OneThirdColumn }
}
</script>
