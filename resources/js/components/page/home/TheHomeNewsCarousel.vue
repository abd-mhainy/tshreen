<template>
    <div class="section_8">
        <div class="news_gallery news_gallery_var2" data-appear-animation="fadeInDown"
            data-appear-animation-delay="200">
            <div class="container">
                <h3 class="section_title">Featured</h3>
                <div id="owl-demo-5">
                    <NewsCarouselItem v-for="item in carouselItems" :key="item.caption" :item="item"></NewsCarouselItem>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import NewsCarouselItem from '../../ui/NewsCarouselItem.vue';
export default {
    computed: {
        carouselItems() {
            return [
                { href: '#', img: 'images/news_carousel_img1.jpg', caption: 'Carousel Item 1', date: 'July 01, 2014 5:50 am' },
                { href: '#', img: 'images/news_carousel_img1.jpg', caption: 'Carousel Item 2', date: 'July 01, 2014 5:50 am' },
                { href: '#', img: 'images/news_carousel_img1.jpg', caption: 'Carousel Item 3', date: 'July 01, 2014 5:50 am' },
                { href: '#', img: 'images/news_carousel_img1.jpg', caption: 'Carousel Item 4', date: 'July 01, 2014 5:50 am' },
                { href: '#', img: 'images/news_carousel_img1.jpg', caption: 'Carousel Item 5', date: 'July 01, 2014 5:50 am' },
                { href: '#', img: 'images/news_carousel_img1.jpg', caption: 'Carousel Item 6', date: 'July 01, 2014 5:50 am' },
                { href: '#', img: 'images/news_carousel_img1.jpg', caption: 'Carousel Item 7', date: 'July 01, 2014 5:50 am' },
                { href: '#', img: 'images/news_carousel_img1.jpg', caption: 'Carousel Item 8', date: 'July 01, 2014 5:50 am' },
                { href: '#', img: 'images/news_carousel_img1.jpg', caption: 'Carousel Item 9', date: 'July 01, 2014 5:50 am' },
                { href: '#', img: 'images/news_carousel_img1.jpg', caption: 'Carousel Item 10', date: 'July 01, 2014 5:50 am' },
            ];
        }
    },
    components: { NewsCarouselItem },
    mounted() {
        $("#owl-demo-5").owlCarousel({
            items: 5,
            navSpeed: 800,
            nav: true,
            navText: false,
            loop: true,
            autoplay: true,
            autoplaySpeed: 800,
            responsive: {
                0: {
                    items: 1
                },
                481: {
                    items: 3
                },
                992: {
                    items: 5
                }
            }
        });
    }
}
</script>
