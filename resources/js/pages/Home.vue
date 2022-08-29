<template>
    <TheSlider></TheSlider>
    <div class="container" style="margin-top: 60px;">
        <NewsGridLarge></NewsGridLarge>
    </div>
    <div class="content">
        <TheNewsCarousel></TheNewsCarousel>
    </div>
    <div class="container" style="margin: 60px auto;">
        <div class="row">
            <TheHomeMain></TheHomeMain>
            <TheHomeAside></TheHomeAside>
        </div>
    </div>
</template>

<script>
import TheNewsCarousel from '../components/TheNewsCarousel.vue';
import TheSlider from '../components/TheSlider.vue';
import TheHomeMain from '../components/TheHomeMain.vue';
import TheHomeAside from '../components/TheHomeAside.vue';
import NewsGridLarge from '../components/NewsGridLarge.vue';

export default {
    components: {
        TheNewsCarousel,
        TheSlider,
        NewsGridLarge,
        TheHomeMain,
        TheHomeAside,
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
