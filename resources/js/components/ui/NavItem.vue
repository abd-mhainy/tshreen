<template>
    <li><router-link :to="item.href">{{ item.text }}</router-link></li>
</template>

<script>
export default {
    props: {
        item: Object
    },
}
</script>
