import { createApp,component } from 'vue/dist/vue.esm-bundler.js';
import Header from './components/Header.vue'
import Footer from './components/Footer.vue'
import Menue from './components/Menue.vue'
import Home from './components/Home.vue'

const app = createApp({});
app.component("my-header", Header);
app.component("my-footer", Footer);
app.component("my-menue", Menue);
app.component("home", Home);
app.mount("#app");
