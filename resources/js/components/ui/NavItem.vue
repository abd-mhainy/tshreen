<template>
    <li>
        <a v-if="item.href.includes('http')" :href="item.href">{{ item.text }}</a>
        <router-link v-else :to="item.href">{{ item.text }}</router-link>
    </li>
</template>

<script>
export default {
    props: {
        item: Object
    },
}
</script>
