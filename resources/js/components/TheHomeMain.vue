<template>
    <main id="main" class="col-md-8 col-sm-12">
        <NewsGridSmall v-for="item in gridItems" :key="item.index" :grid="item"></NewsGridSmall>
    </main>
</template>

<script>
import NewsGridSmall from './NewsGridSmall.vue';
export default {
    computed: {
        gridItems() {
            return [
                {
                    variation: "variation_4",
                    title: "Title 1",
                    index: 1,
                    columns: [
                        [
                            { img: "images/flex_small_img1.jpg", href: "#", date: "July 13 2020", caption: "Lorem Ipsum 1" },
                            { img: "images/flex_small_img1.jpg", href: "#", date: "July 13 2020", caption: "Lorem Ipsum 2" },
                        ],
                        [
                            { img: "images/flex_small_img1.jpg", href: "#", date: "July 13 2020", caption: "Lorem Ipsum 3" },
                            { img: "images/flex_small_img1.jpg", href: "#", date: "July 13 2020", caption: "Lorem Ipsum 4" },
                        ],
                    ]
                },
                {
                    variation: "",
                    title: "Title 2",
                    index: 2,
                    columns: [
                        [
                            { img: "images/flex_small_img1.jpg", href: "#", date: "July 13 2020", caption: "Lorem Ipsum 5" },
                            { img: "images/flex_small_img1.jpg", href: "#", date: "July 13 2020", caption: "Lorem Ipsum 6" },
                        ],
                        [
                            { img: "images/flex_small_img1.jpg", href: "#", date: "July 13 2020", caption: "Lorem Ipsum 7" },
                            { img: "images/flex_small_img1.jpg", href: "#", date: "July 13 2020", caption: "Lorem Ipsum 8" },
                        ],
                    ]
                },
                {
                    variation: "variation_5",
                    title: "Title 3",
                    index: 3,
                    columns: [
                        [
                            { img: "images/flex_small_img1.jpg", href: "#", date: "July 13 2020", caption: "Lorem Ipsum 9" },
                            { img: "images/flex_small_img1.jpg", href: "#", date: "July 13 2020", caption: "Lorem Ipsum 10" },
                        ],
                        [
                            { img: "images/flex_small_img1.jpg", href: "#", date: "July 13 2020", caption: "Lorem Ipsum 11" },
                            { img: "images/flex_small_img1.jpg", href: "#", date: "July 13 2020", caption: "Lorem Ipsum 12" },
                        ],
                    ]
                },
                {
                    variation: "variation_6",
                    title: "Title 4",
                    index: 4,
                    columns: [
                        [
                            { img: "images/flex_small_img1.jpg", href: "#", date: "July 13 2020", caption: "Lorem Ipsum 13" },
                            { img: "images/flex_small_img1.jpg", href: "#", date: "July 13 2020", caption: "Lorem Ipsum 14" },
                        ],
                        [
                            { img: "images/flex_small_img1.jpg", href: "#", date: "July 13 2020", caption: "Lorem Ipsum 15" },
                            { img: "images/flex_small_img1.jpg", href: "#", date: "July 13 2020", caption: "Lorem Ipsum 16" },
                        ],
                    ]
                },
            ];
        }
    },
    components: { NewsGridSmall }
}
</script>