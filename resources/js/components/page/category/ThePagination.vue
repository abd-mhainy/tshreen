<template>
    <div class="pagination_block">
        <span>صفحة {{ activePage }} من {{ pageCount }}</span>
        <ul class="pagination clearfix">
            <li>
                <a :class="{ disabled: activePage === 1}" href="#" @click="pageChanged(activePage - 1)">
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
            <li v-for="index in pageCount">
                <a href="#" :class="{ active: index === activePage }" @click="pageChanged(index)">{{ index }}</a>
            </li>
            <li>
                <a :class="{ disabled: activePage === pageCount }" href="#" @click="pageChanged(activePage + 1)">
                    <i class="fa fa-angle-left"></i>
                </a>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        pageCount: Number,
    },

    methods: {
        pageChanged(pageNumber) {
            this.activePage = pageNumber;

            this.$emit('pageChanged', pageNumber);
        },
    },

    data() {
        return {
            activePage: 1,

        }
    }
}
</script>

<style scoped>
.disabled {
    cursor: not-allowed;
    color: #b0b1b4;
    pointer-events: none;
}
</style>
