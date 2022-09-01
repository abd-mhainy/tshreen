<template>
    <aside id="sidebar" class="col-md-4 col-sm-12">
        <SmallSlider :config="martyrsConfig"></SmallSlider>
        <SmallSlider :config="woundedConfig"></SmallSlider>
    </aside>
</template>

<script>
import SmallSlider from '../../blocks/SmallSlider.vue';

export default {
    components: {
        SmallSlider,
    },

    computed: {
        martyrsConfig() {
            return {
                title: 'شهدائنا',
                martyrs: [
                    { name: 'شهيد 1', href: '#', img: 'images/writer_1.jpg', city: 'city 1' },
                    { name: 'شهيد 2', href: '#', img: 'images/writer_1.jpg', city: 'city 2' },
                    { name: 'شهيد 3', href: '#', img: 'images/writer_1.jpg', city: 'city 3' },
                    { name: 'شهيد 4', href: '#', img: 'images/writer_1.jpg', city: 'city 4' },
                    { name: 'شهيد 5', href: '#', img: 'images/writer_1.jpg', city: 'city 5' },
                    { name: 'شهيد 6', href: '#', img: 'images/writer_1.jpg', city: 'city 6' },
                ]
            }
        },
        woundedConfig() {
            return {
                title: 'الجرحى',
                martyrs: [
                    { name: 'جريح 1', href: '#', img: 'images/writer_1.jpg', city: 'city 1' },
                    { name: 'جريح 2', href: '#', img: 'images/writer_1.jpg', city: 'city 2' },
                    { name: 'جريح 3', href: '#', img: 'images/writer_1.jpg', city: 'city 3' },
                    { name: 'جريح 4', href: '#', img: 'images/writer_1.jpg', city: 'city 4' },
                    { name: 'جريح 5', href: '#', img: 'images/writer_1.jpg', city: 'city 5' },
                    { name: 'جريح 6', href: '#', img: 'images/writer_1.jpg', city: 'city 6' },
                ]
            }
        }
    }
}
</script>

<style scoped lang="scss">
#sidebar {
    position: sticky;
    top: 60px;
}
</style>
