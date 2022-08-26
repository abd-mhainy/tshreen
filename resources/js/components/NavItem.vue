<template>
    <li><a :to="item.href">{{ item.text }}</a></li>
</template>

<script>
export default {
    props: {
        item: Object
    },
}
</script>