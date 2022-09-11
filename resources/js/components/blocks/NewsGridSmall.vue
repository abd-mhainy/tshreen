<template>
    <div class="section">
        <div class="tabs variation_2" data-appear-animation="fadeInDown" data-appear-animation-delay="200">
            <!--tabs navigation-->
            <div class="clearfix">
                <h3 class="section_title"><router-link :to="grid.tagHref">{{ grid.title }}</router-link></h3>
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
                        <ul>
                            <NewsItem v-for="item in grid.columns" :key="item.capiton" :item="item"></NewsItem>
                        </ul>
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

<style scoped lang="scss">
@import 'resources/sass/gridTitle';

    [id*="tab-"]:deep() {
        ul {
            display: grid;
            gap: 1rem;
            grid-template-columns: repeat(auto-fit, minmax(274px, 1fr));
            padding: 0 15px;

            li {
                margin-top: 30px !important;
            }
        }
    }
</style>
