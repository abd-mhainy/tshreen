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
                <TheCategoriesRows :items="responseData.data"></TheCategoriesRows>
              </ul>
            </div>
            <div class="pagination_block">
              <span>Page 1 of 4</span>
              <ul class="pagination clearfix">
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
              </ul>
            </div>
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

export default {
  props: {
    categoryName: String,
    categoryId: Number,
  },

  data() {
        return {
            isLoading: true,
            responseData: {},
        }
    },

    async beforeMount() {
        const categoryData = await window.axios.get(`/news/${this.categoryId}/ar/get-all-news-by-category`);

        this.isLoading = false;
        this.responseData = categoryData.data;
    },

  components: { TheCategoriesRows, TheSpinner, TheAside }
}
</script>
