<template>
    <div class="wrapper_container">
        <TheNavigation></TheNavigation>
        <router-view></router-view>
        <TheFooter></TheFooter>
    </div>
</template>

<script>
import TheNavigation from './components/layout/TheNavigation.vue';
import TheFooter from './components/layout/TheFooter.vue';

export default {
    components: {
        TheNavigation,
        TheFooter,
    },
};
</script>

<style>
#sidebar {
    position: sticky;
    top: 60px;
}
</style>
