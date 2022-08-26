<template>
    <div class="wrapper_container">
        <TheNavigation></TheNavigation>
        <router-view></router-view>
        <TheFooter></TheFooter>
    </div>
</template>

<script>
import TheNavigation from './components/TheNavigation.vue';
import TheFooter from './components/TheFooter.vue';

export default {
    components: {
        TheNavigation,
        TheFooter
    },
};
</script>
