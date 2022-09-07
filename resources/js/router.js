import { createRouter, createWebHistory } from 'vue-router';

import Home from '../js/pages/Home.vue';
import Category from '../js/pages/Category.vue';
import Post from '../js/pages/Post.vue'

const router = createRouter({
  history: createWebHistory(),
  routes: [
    { path: '/', component: Home },
    { path: '/category/:categoryId/:categoryName', component: Category, props: true },
    { path: '/post/:postId/:postTitle', component: Post, props: true },
  ],
  // scrollBehavior(_, _2, savedPosition) {
  //   if (savedPosition) {
  //     return savedPosition;
  //   }

  //   return { left: 0, top: 0 };
  // }
});

export default router;
