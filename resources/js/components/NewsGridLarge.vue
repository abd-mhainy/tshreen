<template>
    <div class="tabs variation_2 variation_4" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
        <div class="clearfix">
            <h3 class="section_title">Sport</h3>
            <div class="clearfix tabs_conrainer"><a href="#">المزيد</a></div>
            <!-- Do not remove this part, for some reason it's breaking the page -->
            <div class="clearfix tabs_conrainer" style="display: none;">
                <ul class="tabs_nav clearfix">
                    <li class=""><a href="#tab-1">All</a></li>
                    <li class=""><a href="#tab-2">Ski</a></li>
                    <li class=""><a href="#tab-3">Serfing</a></li>
                    <li class=""><a href="#tab-4">Bicycle</a></li>
                </ul>
            </div>
        </div>
        <!--tabs content-->
        <div class="tabs_content post_var_inline">
            <div id="tab-0">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6" v-for="(column, index) in gridItems" :key="index">
                        <ul>
                            <NewsItem v-for="item in column" :key="item.caption" :item="item"></NewsItem>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import NewsItem from './NewsItem.vue';
export default {
    computed: {
        gridItems() {
            return [
                [
                    { img: "images/flex_small_img1.jpg", href: "#", date: "July 13 2020", caption: "Lorem Ipsum 1" },
                    { img: "images/flex_small_img1.jpg", href: "#", date: "July 13 2020", caption: "Lorem Ipsum 2" },
                    { img: "images/flex_small_img1.jpg", href: "#", date: "July 13 2020", caption: "Lorem Ipsum 3" },
                ],
                [
                    { img: "images/flex_small_img1.jpg", href: "#", date: "July 13 2020", caption: "Lorem Ipsum 4" },
                    { img: "images/flex_small_img1.jpg", href: "#", date: "July 13 2020", caption: "Lorem Ipsum 5" },
                    { img: "images/flex_small_img1.jpg", href: "#", date: "July 13 2020", caption: "Lorem Ipsum 6" },
                ],
                [
                    { img: "images/flex_small_img1.jpg", href: "#", date: "July 13 2020", caption: "Lorem Ipsum 7" },
                    { img: "images/flex_small_img1.jpg", href: "#", date: "July 13 2020", caption: "Lorem Ipsum 8" },
                    { img: "images/flex_small_img1.jpg", href: "#", date: "July 13 2020", caption: "Lorem Ipsum 9" },
                ],
            ];
        }
    },
    components: { NewsItem }
}
</script>
