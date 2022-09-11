<template>
    <main id="main" class="col-md-8 col-sm-12">
        <NewsGridSmall v-for="item in gridItems" :key="item.index" :grid="item"></NewsGridSmall>
    </main>
</template>

<script>
import NewsGridSmall from "../../blocks/NewsGridSmall.vue";
export default {
    props: {
        config: Array,
    },

    computed: {
        gridItems() {
            const gridItems = [];

            this.$props.config.forEach((categoryName, index) => {
                gridItems.push({
                    variation: `variation_${index + 2}`,
                    title: categoryName[0].category.name,
                    index,
                    columns: [],
                    tagHref: `/category/${categoryName[0].catId}/${categoryName[0].category.name.replaceAll(' ', '-')}`,
                });

                categoryName.forEach((post) => {
                    const {
                        coverImage: img,
                        created_at: date,
                        catId,
                        news_lang,
                        id,
                    } = post;
                    const title = news_lang[0].title;

                    gridItems[index].columns.push({
                        img,
                        date,
                        catId,
                        tag: 'sport',
                        caption: title,
                        href: `/post/${id}/${title.replaceAll(
                            ' ',
                            '-'
                        )}`,
                    });
                });
            });

            return gridItems;
        },
    },
    components: { NewsGridSmall },
};
</script>
