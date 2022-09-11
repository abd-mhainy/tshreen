<template>
    <div class="widget widget_gallery appear-animation fadeInDown appear-animation-visible"
         data-appear-animation="fadeInDown" data-appear-animation-delay="200" style="animation-delay: 200ms;">
        <div class="photo_gallery side_bar">
            <h3 class="section_title">آخر الأخبار</h3>
            <div id="owl-demo-2">
                <FooterSliderItem v-for="item in footerSlider" :key="item.caption" :item="item"></FooterSliderItem>
            </div>
        </div>
    </div>
</template>

<script>
import FooterSliderItem from '../ui/FooterSliderItem.vue';

export default {
    props: {
        items: Object,
    },

    computed: {
        footerSlider() {
            const items = [];

            this.items.forEach(item => {
                const {
                    coverImage: img,
                    id,
                    category: { name: tagText, id: categoryId },
                    news_lang
                } = item;
                const { title: caption } = news_lang[0];

                items.push({
                    img,
                    tagText,
                    caption,
                    href: `/post/${id}/${caption.replaceAll(' ', '-')}`,
                    categoryHref: `/category/${categoryId}/${tagText.replaceAll(' ', '-')}`,
                });
            });

            return items;
        }
    },

    components: { FooterSliderItem },

    mounted() {
        $('#owl-demo-2').owlCarousel({
            items : 1,
            navigation : true,
            nav : true,
            loop: true,
            navSpeed: 800,
            navText:false
        });
    }
}
</script>
