<template>
    <TheSpinner v-if="isLoading"></TheSpinner>
    <template v-else>
        <div class="breadcrumb">
            <div class="container">
                <div>
                    <span>
                        <router-link to="/">الرئيسية</router-link>
                    </span> /
                    <span>
                        <router-link :to="categoryData.href"> {{ categoryData.name }} </router-link>
                    </span> / {{ postTitle.replaceAll('-', ' ') }}
                </div>
            </div>
        </div>
        <!--==============================content================================-->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="section">
                            <PostContent :config="responseData"></PostContent>
                            <PostAuthor :config="responseData"></PostAuthor>
                        </div>
                    </div>
                    <div id="sidebar" class="col-lg-4 col-md-4 col-sm-12">
                        <TheAside></TheAside>
                    </div>
                </div>
            </div>
        </div>
    </template>
</template>

<script>
import TheAside from '../components/layout/TheAside.vue';
import TheSpinner from '../components/layout/TheSpinner.vue';
import PostAuthor from '../components/page/post/PostAuthor.vue';
import PostContent from '../components/page/post/PostContent.vue';

export default {
    props: {
        postId: Number,
        postTitle: String
    },

    components: { TheAside, PostAuthor, PostContent, TheSpinner },

    data() {
        return {
            isLoading: true,
            responseData: {},
        }
    },

    async beforeMount() {
        const postData = await window.axios.get(`/news/${this.postId}/ar/get-news`);

        this.isLoading = false;
        this.responseData = postData.data;
    },

     computed: {
        categoryData() {
            const { category: { id, name } } = this.responseData;

            return { href: `/category/${id}/${name.replaceAll(' ', '-')}`, name };
        }
     },
}
</script>
