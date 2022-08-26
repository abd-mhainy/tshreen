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
import SliderItems from './SliderItems.vue';
export default {
    computed: {
        firstSlide() {
            return [
                {
                    href: "#",
                    img: "images/banner_1-1.jpg",
                    tag: "sport",
                    tagText: "Sport",
                    date: "July 01, 2014 5:50 am",
                    caption: "Winter is Coming: Top Ski Resorts For Family",
                },
                {
                    href: "#",
                    img: "images/banner_3-1_small.jpg",
                    tag: "business",
                    tagText: "Business",
                    date: "July 01, 2014 5:50 am",
                    caption: "Buisnes stuff 1",
                },
                {
                    href: "#",
                    img: "images/banner_4-1_small.jpg",
                    tag: "health",
                    tagText: "Health",
                    date: "July 01, 2014 5:50 am",
                    caption: "Health stuff 1",
                },
                {
                    href: "#",
                    img: "images/banner_5-1_small.jpg",
                    tag: "sport",
                    tagText: "Sport",
                    date: "July 01, 2014 5:50 am",
                    caption: "Sport stuff 1",
                },
                {
                    href: "#",
                    img: "images/banner_6-1_small.jpg",
                    tag: "sport",
                    tagText: "Sport",
                    date: "July 01, 2014 5:50 am",
                    caption: "Sport stuff 2",
                },
            ];
        },
        secondSlide() {
            return [
                {
                    href: "#",
                    img: "images/banner_1-1.jpg",
                    tag: "health",
                    tagText: "Health",
                    date: "July 01, 2014 5:50 am",
                    caption: "BIG HEALTH ",
                },
                {
                    href: "#",
                    img: "images/banner_3-1_small.jpg",
                    tag: "business",
                    tagText: "Business",
                    date: "July 01, 2014 5:50 am",
                    caption: "Buisnes stuff 2",
                },
                {
                    href: "#",
                    img: "images/banner_4-1_small.jpg",
                    tag: "health",
                    tagText: "Health",
                    date: "July 01, 2014 5:50 am",
                    caption: "Health stuff 2",
                },
                {
                    href: "#",
                    img: "images/banner_5-1_small.jpg",
                    tag: "sport",
                    tagText: "Sport",
                    date: "July 01, 2014 5:50 am",
                    caption: "Sport stuff 3",
                },
                {
                    href: "#",
                    img: "images/banner_6-1_small.jpg",
                    tag: "sport",
                    tagText: "Sport",
                    date: "July 01, 2014 5:50 am",
                    caption: "Sport stuff 4",
                },
            ];
        }
    },
    components: { SliderItems }
}
</script>