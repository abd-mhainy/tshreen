<template>
    <div class="wrapper relative">
        <!--Gallery-->
        <div id="owl-demo-9">
            <SliderItems :items="firstSlide"></SliderItems>
            <SliderItems :items="secondSlide"></SliderItems>
        </div>
    </div>
</template>

<script>
import SliderItems from '../../ui/SliderItems.vue';
export default {
    props: {
        config: Object,
    },
    methods: {
        getSliderData(slideIndex) {
            const sliderData = [];
            this.$props.config[slideIndex].forEach(slide => {
                const {
                    category: { name: tagText },
                    coverImage: img,
                    created_at: date,
                    catId,
                    news_lang,
                    id,
                } = slide;
                const title = news_lang[0].title;

                sliderData.push({
                    tagText,
                    img,
                    date,
                    catId,
                    tag: 'sport',
                    caption: title,
                    href: `post/${catId}/${id}/${title.replaceAll(' ', '-')}`,
                });
            });

            return sliderData;
        }
    },
    computed: {
        firstSlide() {
            return this.getSliderData('first');
        },
        secondSlide() {
            return this.getSliderData('second');
        }
    },
    components: { SliderItems },
    mounted() {
        $("#owl-demo-9").owlCarousel({
            items: 1,
            navSpeed: 800,
            nav: true,
            navText: false,
            loop: true
        });
    }
}
</script>
