import Vue from 'vue'
import VueRouter from 'vue-router'
import Error404 from '../components/error/404.vue'
import Home from '../pages/home/home.vue'
import Login from '../pages/login/Login.vue'
import Jobs from '../pages/jobs/index.vue'
import Detail from '../pages/jobs/detail.vue'

Vue.use(VueRouter)

  const routes = [
  {
    path: '*',
    name: 'Error404',
    component: Error404,
  },
  {
    path: '/',
    name: 'Home',
    component: Home,
    children: [ 
      {
        path: 'jobs',
        name: 'Jobs',
        component: Jobs,
        children: [ 
          {
            path: 'index',
            name: 'index',
            component: Detail,
          },
          {
            path: 'detail',
            name: 'Detail',
            component: Detail,
          },
        ]
      },
    ]
  },
  {
    path: '/login',
    name: 'Login',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: Login,
  }
]

const router = new VueRouter({
  mode: 'history',
  routes
})

export default router
