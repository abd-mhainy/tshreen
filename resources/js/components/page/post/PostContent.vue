<template>
    <div class="clearfix page_theme">
        <div class="f_left">
            <div class="post_image_buttons">
                <div class="buttons_container">
                    <a href="#" class="button banner_button travel">{{ post.categoryName }}</a>
                </div>
            </div>
            <div class="event_date">{{ post.date }}</div>
        </div>
    </div>

    <h2 class="section_title section_title_medium_var2">
        {{ post.title }}
    </h2>
    <div class="scale_image_container">
        <a href="#"><img :src="post.img" alt="" class="scale_image" /></a>
    </div>
    <div class="text_post_block">
        <p>{{ post.body }}</p>
    </div>
</template>

<script>
export default {
    props: {
        config: Object,
    },

    computed: {
        post() {
            const {
                coverImage: img,
                category: { name: categoryName },
                news_lang,
                created_at: date,
            } = this.config;
            const { body, title } = news_lang[0];

            return {
                img,
                categoryName,
                date,
                body,
                title,
            };
        },
    },
};
</script>

<style scoped lang="scss">
.scale_image_container {
    max-width: 750px;
    max-height: 375px;

    img {
        aspect-ratio: 2;
        width: 100%;
        height: 100%;
    }
}
</style>
