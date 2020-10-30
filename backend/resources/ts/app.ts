import { createApp,component } from 'vue/dist/vue.esm-bundler.js';
import Header from './components/Header.vue'
import Footer from './components/Footer.vue'

const app = createApp({});
app.component("my-header", Header);
app.component("my-footer", Footer);
app.mount("#app");
