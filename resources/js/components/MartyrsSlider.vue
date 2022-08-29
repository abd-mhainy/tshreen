<template>
    <div class="section" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
        <h3 class="section_title">{{ config.title }}</h3>
        <ul class="writers_list clearfix" ref="owlContainer">
            <li v-for="martyr in config.martyrs" :key="martyr.name">
                <a :href="martyr.href">
                    <div>
                        <img :src="martyr.img" :alt="martyr.name">
                    </div>
                    <div class="post_text">
                        <h4>{{ martyr.name }}</h4>
                        <div class="event_date">{{ martyr.city }}</div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</template>

<style scoped lang="scss">
ul.writers_list li {
    margin-left: 0;
}

</style>

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