<template>
    <div class="section" data-appear-animation="fadeInDown" data-appear-animation-delay="200">
        <h3 class="section_title">{{  config.title  }}</h3>
        <ul class="writers_list clearfix" ref="owlContainer">
            <li v-for="item in config.items" :key="item.name">
                <a :href="item.href">
                    <div>
                        <img :src="item.img" :alt="item.name">
                    </div>
                    <div class="post_text">
                        <h4>{{  item.name  }}</h4>
                        <div class="event_date">{{  item.city  }}</div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    mounted() {
        $(this.$refs.owlContainer).owlCarousel({
            loop: true,
            margin: 30,
            items: 3,
            autoplay: true,
        });
    },

    props: {
        config: Object,
    }
}
</script>

<style scoped lang="scss">
@import "resources/sass/sectionTitle";

ul.writers_list li {
    margin-left: 0;
}

img {
    width: 100px;
    height: 100px;
    aspect-ratio: 1;
}
</style>
