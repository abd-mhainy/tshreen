import { createRouter, createWebHistory } from 'vue-router';

import Home from '../js/pages/Home.vue';
import Category from '../js/pages/Category.vue'

const router = createRouter({
  history: createWebHistory(),
  routes: [
    { path: '/', component: Home },
    { path: '/category/:category', component: Category, props: true }
  ],
  scrollBehavior(_, _2, savedPosition) {
    if (savedPosition) {
      return savedPosition;
    }

    return { left: 0, top: 0 };
  }
});

export default router;
