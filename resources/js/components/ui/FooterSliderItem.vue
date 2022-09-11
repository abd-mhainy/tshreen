<template>
    <div class="item">
        <div class="scale_image_container">
            <router-link :to="item.href">
                <img :src="item.img" :alt="item.caption" class="scale_image"></router-link>
            <div class="post_image_buttons">
                <router-link
                    :to="item.categoryHref"
                    class="button banner_button"
                    :data-category="item.tagText"
                >{{ item.tagText}}</router-link>
            </div>
        </div>
        <div class="post_text">
            <h4 class="post_title">
                <router-link :to="item.href">{{ item.caption }}</router-link>
            </h4>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        item: Object,
    }
}
</script>

<style scoped>
img {
    height: 555px;
    width: 374px;
    aspect-ratio: 1.48;
}

.section_title {
    color: white;
}
</style>
