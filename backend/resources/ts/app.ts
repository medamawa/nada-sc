import { createApp,component } from 'vue/dist/vue.esm-bundler.js';
import Header from './components/Header.vue'
import Footer from './components/Footer.vue'
import Menue from './components/Menue.vue'
import Article from './components/Article.vue'
import Home from './components/Home.vue'
import Opinion from './components/Opinion.vue'
import Write from './components/Write.vue'

const app = createApp({});
app.component("my-header", Header);
app.component("my-footer", Footer);
app.component("my-menue", Menue);
app.component("my-article", Article);
app.component("home", Home);
app.component("opinion", Opinion);
app.component("write", Write);
app.mount("#app");
