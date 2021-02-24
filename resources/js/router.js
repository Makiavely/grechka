import Vue from 'vue';
import VueRouter from 'vue-router';
import ExampleComponent from "./components/ExampleComponent";
import ProductsShow from "./views/ProductsShow";
import ProductsIndex from "./views/ProductsIndex";

Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        {path: '/', component: ExampleComponent},
        {path: '/products', component: ProductsIndex},
        {path: '/products/:id', component: ProductsShow},
    ],
    mode: 'history'
})
