<template>
        <TheSpinner v-if="isLoading"></TheSpinner>
        <template v-else>
            <SmallSlider :config="martyrsConfig"></SmallSlider>
            <SmallSlider :config="woundedConfig"></SmallSlider>
        </template>
</template>

<script>
import SmallSlider from '../blocks/SmallSlider.vue';
import TheSpinner from "./TheSpinner.vue";

export default {
    components: {
        TheSpinner,
        SmallSlider,
    },

    data() {
        return {
            isLoading: true,
            responseData: {},
        }
    },

    async beforeMount() {
        const martyrsData = await window.axios.get('/ar/side-bar');

        this.isLoading = false;
        this.responseData = martyrsData.data;
    },

    methods: {
        constructData(type) {
            const victims = [];

            this.responseData[type].forEach(victim => {
                const {
                    coverImage: img,
                    id,
                    city: { name: city },
                    victims_lang
                } = victim;
                const { name } = victims_lang[0]

                victims.push({
                    img,
                    city,
                    name,
                    href: `/victim/${id}/${name.replaceAll(' ', '-')}`,
                });
            });

            return victims;
        },
    },

    computed: {
        martyrsConfig() {
            return {
                title: 'شهدائنا',
                items: this.constructData('martyrs'),
            }
        },
        woundedConfig() {
            return {
                title: 'الجرحى',
                items: this.constructData('injured'),
            }
        }
    }
}
</script>
