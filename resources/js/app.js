require('./bootstrap');

import { App, plugin } from '@inertiajs/inertia-vue'
import Vue from 'vue'
import { InertiaProgress } from '@inertiajs/progress'

InertiaProgress.init()

resolveComponent: name => import(`./Pages/${name}`).then(module => module.default),


Vue.use(plugin)

const el = document.getElementById('app')

new Vue({
  render: h => h(App, {
    props: {
      initialPage: JSON.parse(el.dataset.page),
      resolveComponent: name => require(`./Pages/${name}`).default,
    },
  }),
}).$mount(el)
