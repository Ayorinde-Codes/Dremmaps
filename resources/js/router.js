// src/router/index.js
import { createRouter, createWebHistory } from 'vue-router';
import Welcome from '@/components/Welcome.vue';
import SelectSkills from '@/components/SelectSkills.vue';

const routes = [
  {
    path: '/',
    name: 'Welcome',
    component: Welcome
  },
  {
    path: '/onboarding/select-skills',
    name: 'SelectSkills',
    component: SelectSkills
  }
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
});

export default router;
