<template>
    <div class="section">
        <h3 class="section_title">عن {{ author.name }}</h3>
        <div class="author_details clearfix">
            <div class="f_left">
                <div>
                    <img :src="author.image" :alt="author.name">
                </div>
            </div>
            <div>
                <p>{{ author.biography }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
      config: Object,
    },

    computed: {
        author() {
          const { name, image, biography } = this.config.publisher;

          return { name, image: `/images/${image}`, biography };
        },
    }
}
</script>

<style scoped lang="scss">
img {
    width: 165px;
    height: 165px;
    aspect-ratio: 1;
}
</style>
