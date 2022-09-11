<template>
    <div class="tabs variation_2" data-appear-animation="fadeInDown" data-appear-animation-delay="200">
        <div class="clearfix">
            <h3 class="section_title"><router-link to="/category/1/الأخبار">الأخبار</router-link></h3>
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
import NewsItem from '../ui/NewsItem.vue';
export default {
    props: {
        config: Object,
    },
    computed: {
        gridItems() {
            const gridData = [];
            this.$props.config.forEach(grid => {
                const {
                    category: { name: tagText },
                    coverImage: img,
                    created_at: date,
                    catId,
                    news_lang,
                    id,
                } = grid;
                const title = news_lang[0].title;

                gridData.push({
                    tagText,
                    img,
                    date,
                    catId,
                    tag: 'sport',
                    caption: title,
                    href: `post/${id}/${title.replaceAll(' ', '-')}`,
                });
            });

            return [gridData.slice(0, 3), gridData.slice(3, 6), gridData.slice(6, 9)];
        }
    },
    components: { NewsItem }
}
</script>

<style scoped lang="scss">
@import 'resources/sass/gridTitle';
</style>
