<template>
  <div class="breadcrumb">
    <div class="container">
      <div>
        <span>
          <router-link to="/">الرئيسية</router-link>
        </span> / {{  category  }}
      </div>
    </div>
  </div>
  <!--==============================content================================-->
  <div class="content">
    <div class="container">
      <div class="section read_post_list var3">
        <h2 class="section_title section_title_big">{{  category  }}</h2>
        <div class="clearfix">
          <TwoThirdColumn :item="featuredContent[0]"></TwoThirdColumn>
          <OneThirdColumn :items="[featuredContent[1], featuredContent[2]]"></OneThirdColumn>
        </div>
        <ul class="tabs_content">
          <TheCategoriesGrid v-for="(items, index) in categoryItems" :key="index" :items="items"></TheCategoriesGrid>
        </ul>
      </div>
      <div class="pagination_block">
        <span>Page 1 of 4</span>
        <ul class="pagination clearfix">
          <li><a href="#" class="active">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
import TwoThirdColumn from '../components/ui/TwoThirdColumn.vue';
import OneThirdColumn from '../components/ui/OneThirdColumn.vue';
import TheCategoriesGrid from '../components/page/category/TheCategoriesGrid.vue';
export default {
  data() {
    return {
      featuredContent: [
        {
          href: '#',
          img: '/images/banner_1-5.jpg',
          tag: 'sport',
          tagText: 'Sport',
          date: 'July 01, 2014 5:50 am',
          caption: 'Winter is Coming: Top Ski Resorts For Family',
        },
        {
          href: '#',
          img: '/images/banner_6_small.jpg',
          tag: 'fashion',
          tagText: 'Shopping',
          date: 'July 01, 2014 5:50 am',
          caption: 'Shoppin stuff 1',
        },
        {
          href: '#',
          img: '/images/banner_6_small.jpg',
          tag: 'fashion',
          tagText: 'Fashion',
          date: 'July 01, 2014 5:50 am',
          caption: 'Fashion Stuff 1',
        },
      ],
      categoryItems: [
        [
          {
            href: '#',
            img: '/images/banner_1-5.jpg',
            tag: 'sport',
            tagText: 'Sport',
            date: 'July 01, 2014 5:50 am',
            caption: 'Winter is Coming: Top Ski Resorts For Family',
          },
          {
            href: '#',
            img: '/images/banner_6_small.jpg',
            tag: 'fashion',
            tagText: 'Shopping',
            date: 'July 01, 2014 5:50 am',
            caption: 'Shopping stuff 1',
          },
          {
            href: '#',
            img: '/images/banner_6_small.jpg',
            tag: 'fashion',
            tagText: 'Fashion',
            date: 'July 01, 2014 5:50 am',
            caption: 'Fashion Stuff 1',
          },
        ], [
          {
            href: '#',
            img: '/images/banner_1-5.jpg',
            tag: 'sport',
            tagText: 'Sport',
            date: 'July 01, 2014 5:50 am',
            caption: 'Winter is Coming: Top Ski Resorts For Family 1',
          },
          {
            href: '#',
            img: '/images/banner_6_small.jpg',
            tag: 'fashion',
            tagText: 'Shopping',
            date: 'July 01, 2014 5:50 am',
            caption: 'Shopping stuff 2',
          },
          {
            href: '#',
            img: '/images/banner_6_small.jpg',
            tag: 'fashion',
            tagText: 'Fashion',
            date: 'July 01, 2014 5:50 am',
            caption: 'Fashion Stuff 2',
          },
        ], [
          {
            href: '#',
            img: '/images/banner_1-5.jpg',
            tag: 'sport',
            tagText: 'Sport',
            date: 'July 01, 2014 5:50 am',
            caption: 'Winter is Coming: Top Ski Resorts For Family 2',
          },
          {
            href: '#',
            img: '/images/banner_6_small.jpg',
            tag: 'fashion',
            tagText: 'Shopping',
            date: 'July 01, 2014 5:50 am',
            caption: 'Shopping stuff 3',
          },
          {
            href: '#',
            img: '/images/banner_6_small.jpg',
            tag: 'fashion',
            tagText: 'Fashion',
            date: 'July 01, 2014 5:50 am',
            caption: 'Fashion Stuff 3',
          },
        ], [
          {
            href: '#',
            img: '/images/banner_1-5.jpg',
            tag: 'sport',
            tagText: 'Sport',
            date: 'July 01, 2014 5:50 am',
            caption: 'Winter is Coming: Top Ski Resorts For Family 3',
          },
          {
            href: '#',
            img: '/images/banner_6_small.jpg',
            tag: 'fashion',
            tagText: 'Shopping',
            date: 'July 01, 2014 5:50 am',
            caption: 'Shopping stuff 4',
          },
          {
            href: '#',
            img: '/images/banner_6_small.jpg',
            tag: 'fashion',
            tagText: 'Fashion',
            date: 'July 01, 2014 5:50 am',
            caption: 'Fashion Stuff 4',
          }
        ]],
    };
  },
  props: {
    category: String,
  },
  components: { TwoThirdColumn, OneThirdColumn, TheCategoriesGrid, TheCategoriesGrid }
}
</script>
