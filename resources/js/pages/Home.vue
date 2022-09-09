<template>
    <TheSpinner v-if="isLoading"></TheSpinner>
    <template v-else>
        <TheHomeSlider :config="responseData.slider"></TheHomeSlider>
        <div class="container" style="margin-top: 60px;">
            <NewsGridLarge :config="responseData.mainNews"></NewsGridLarge>
        </div>
        <div class="content">
            <TheHomeNewsCarousel></TheHomeNewsCarousel>
        </div>
        <div class="container" style="margin: 60px auto;">
            <div class="row">
                <TheHomeMain :config="mainData"></TheHomeMain>
                <aside id="sidebar" class="col-md-4 col-sm-12">
                    <TheAside></TheAside>
                </aside>
            </div>
        </div>
    </template>
</template>

<script>
import TheHomeNewsCarousel from '../components/page/home/TheHomeNewsCarousel.vue';
import TheHomeSlider from '../components/page/home/TheHomeSlider.vue';
import TheHomeMain from '../components/page/home/TheHomeMain.vue';
import NewsGridLarge from '../components/blocks/NewsGridLarge.vue';
import TheSpinner from '../components/layout/TheSpinner.vue';
import TheAside from '../components/layout/TheAside.vue';

export default {
    components: {
        TheHomeNewsCarousel,
        TheHomeSlider,
        NewsGridLarge,
        TheHomeMain,
        TheSpinner,
        TheAside,
    },

    data() {
        return {
            isLoading: true,
            responseData: {},
        }
    },

    async beforeMount() {
        const homeData = await window.axios.get('/ar/home-page');

        this.isLoading = false;
        this.responseData = homeData.data;
    },

    computed: {
        mainData() {
            const { articlesAndResearch, generalAllegation, literature, scienceAndTech, sport } = this.responseData;

            return [articlesAndResearch, generalAllegation, literature, scienceAndTech, sport];
        },
    },
};

//theme home page script
// var colors = [['#fa985d', '#ffffff']], circles = [];
// var child = document.getElementById('circles-3');
// circles.push(Circles.create({
//     id:         child.id,
//     value:      6.2,
//     radius:     14,
//     width:      3,
//     maxValue:   10,
//     duration:   1000,
//     text:       function(value){return value;},
//     colors:    ['#fa985d', '#ffffff']
// }));

// var child = document.getElementById('circles-4');
// circles.push(Circles.create({
//     id:         child.id,
//     value:      6.2,
//     radius:     14,
//     width:      3,
//     maxValue:   10,
//     duration:   1000,
//     text:       function(value){return value;},
//     colors:    ['#fa985d', '#ffffff']
// }));

// var child = document.getElementById('circles-8');
// circles.push(Circles.create({
//     id:         child.id,
//     value:      8.0,
//     radius:     19,
//     width:      3,
//     maxValue:   10,
//     duration:   1000,
//     text:       function(value){return value;},
//     colors:    ['#fa985d', '#ffffff']
// }));

// var child = document.getElementById('circles-9');
// circles.push(Circles.create({
//     id:         child.id,
//     value:      7.7,
//     radius:     19,
//     width:      3,
//     maxValue:   10,
//     duration:   1000,
//     text:       function(value){return value;},
//     colors:    ['#fa985d', '#ffffff']
// }));

// var child = document.getElementById('circles-10');
// circles.push(Circles.create({
//     id:         child.id,
//     value:      9.2,
//     radius:     19,
//     width:      3,
//     maxValue:   10,
//     duration:   1000,
//     text:       function(value){return value;},
//     colors:    ['#fa985d', '#ffffff']
// }));

// var child = document.getElementById('circles-11');
// circles.push(Circles.create({
//     id:         child.id,
//     value:      7.4,
//     radius:     14,
//     width:      3,
//     maxValue:   10,
//     duration:   1000,
//     text:       function(value){return value;},
//     colors:    ['#fa985d', '#ffffff']
// }));

// var child = document.getElementById('circles-12');
// circles.push(Circles.create({
//     id:         child.id,
//     value:      6.5,
//     radius:     14,
//     width:      3,
//     maxValue:   10,
//     duration:   1000,
//     text:       function(value){return value;},
//     colors:    ['#fa985d', '#ffffff']
// }));

// var child = document.getElementById('circles-13');
// circles.push(Circles.create({
//     id:         child.id,
//     value:      8.6,
//     radius:     14,
//     width:      3,
//     maxValue:   10,
//     duration:   1000,
//     text:       function(value){return value;},
//     colors:    ['#fa985d', '#ffffff']
// }));

// var child = document.getElementById('circles-14');
// circles.push(Circles.create({
//     id:         child.id,
//     value:      9.3,
//     radius:     14,
//     width:      3,
//     maxValue:   10,
//     duration:   1000,
//     text:       function(value){return value;},
//     colors:    ['#fa985d', '#ffffff']
// }));
</script>
