<template>
    <li v-for="post in posts" :key="post.caption">
        <div class="section_post_left">
            <div class="scale_image_container">
                <router-link :to="post.href"><img :src="post.img" alt="" class="scale_image"></router-link>
                <div class="post_image_buttons">
                    <div class="buttons_container">
                        <router-link :to="post.categoryHref" :data-category="post.tagText" class="button banner_button">{{ post.tagText }}</router-link>
                    </div>
                </div>
            </div>
            <div class="clearfix">
                <div class="f_left">
                    <div class="event_date">{{ post.date }}</div>
                </div>
            </div>
            <div class="post_text">
                <h2 class="post_title"><router-link :to="post.href">{{ post.caption }}</router-link></h2>
                <p>{{ post.body }} </p>
                <router-link :to="post.href" class="button button_type_2 button_grey_light">Read More</router-link>
            </div>
        </div>
    </li>
</template>

<script>
export default {
    props: {
        items: Array,
    },

    computed: {
        posts() {
            const posts = [];

            this.$props.items.forEach(post => {
                const {
                    id,
                    catId,
                    category: { name: tagText },
                    coverImage: img,
                    createdAt: date,
                    news_lang,
                } = post;
                const { body, title: caption } = news_lang[0];
                const postData = {
                    tagText,
                    img,
                    href: `/post/${id}/${caption.replaceAll(' ', '-')}`,
                    categoryHref: `/category/${catId}/${tagText.replaceAll(' ', '-')}`,
                    date,
                    body,
                    caption,
                };

                posts.push(postData);
            });

            return posts;
        },
    },
}
</script>

<style scoped lang="scss">
.scale_image_container {
    max-width: 750px;
    max-height: 374px;

    img {
        aspect-ratio: 2;
        width: 100%;
        height: 100%;
    }
}
</style>
