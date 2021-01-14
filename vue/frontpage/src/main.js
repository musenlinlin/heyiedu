import Vue from 'vue'
import App from './App.vue'

// 导入Bootstrap
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.min.js';

console.log($);

Vue.config.productionTip = false

new Vue({
  render: h => h(App),
}).$mount('#app')
