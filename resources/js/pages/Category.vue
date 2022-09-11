<template>
  <TheSpinner v-if="isLoading"></TheSpinner>
  <template v-else>
    <div class="breadcrumb">
      <div class="container">
        <div>
          <span>
            <router-link to="/">الرئيسية</router-link>
          </span> / {{ categoryName.replaceAll('-', ' ') }}
        </div>
      </div>
    </div>
    <!--==============================content================================-->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="section read_post_list var2">
              <h2 class="section_title section_title_big">{{ categoryName.replaceAll('-', ' ') }}</h2>
              <ul>
                  <TheSpinner v-if="isRenderingCategories"></TheSpinner>
                  <TheCategoriesRows :items="responseData.data" v-else></TheCategoriesRows>
              </ul>
            </div>
            <keep-alive>
                <ThePagination :page-count="responseData.last_page" @page-changed="pageNumber => fetchData(pageNumber)"></ThePagination>
            </keep-alive>
          </div>
          <div id="sidebar" class="col-lg-4 col-md-4 col-sm-12" style="margin-top: 60px;">
            <TheAside></TheAside>
          </div>
        </div>
      </div>
    </div>
  </template>
</template>

<script>
import TheCategoriesRows from '../components/page/category/TheCategoriesRows.vue';
import TheSpinner from '../components/layout/TheSpinner.vue';
import TheAside from '../components/layout/TheAside.vue';
import ThePagination from "../components/page/category/ThePagination.vue";

export default {
  props: {
    categoryName: String,
    categoryId: Number,
  },

  data() {
        return {
            isLoading: true,
            isRenderingCategories: false,
            responseData: {},
        }
    },

    created() {
        this.$watch(
            () => this.$route.params.categoryId,
            async () => {
                await this.fetchData()
            },
            { immediate: true }
        )
    },

    methods: {
      async fetchData(pageNumber) {
          if (pageNumber) {
              this.isRenderingCategories = true;
          } else {
              this.isLoading = true;
          }

          const categoryData = await window.axios.get(
              `/news/${this.$route.params.categoryId}/ar/get-all-news-by-category?page=${pageNumber}`
          );

          this.isLoading = false;
          this.isRenderingCategories = false;
          this.responseData = categoryData.data;
      },
    },

  components: {ThePagination, TheCategoriesRows, TheSpinner, TheAside },
}
</script>
