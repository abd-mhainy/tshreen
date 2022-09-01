<template>
        <div class="section">
            <div
                class="tabs variation_2"
                data-appear-animation="fadeInDown"
                data-appear-animation-delay="1150"
                :class="[grid.variation]"
            >
                <!--tabs navigation-->
                <div class="clearfix">
                    <h3 class="section_title">{{ grid.title }}</h3>
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
                    <div :id="`tab-${4 * grid.index + 1}`">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" v-for="column in grid.columns" :key="grid.index">
                                <ul>
                                    <NewsItem v-for="item in column" :key="item.capiton" :item="item"></NewsItem>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
import NewsItem from '../ui/NewsItem.vue';


export default {
    props: {
        grid: Object,
    },
    components: { NewsItem }
}
</script>
