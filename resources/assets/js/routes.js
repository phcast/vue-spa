import VueRouter from 'vue-router';

let routes = [
    {
        path: '/',
        component: require('./components/pages/Home.vue')
    },
    {
        path: '/about',
        component: require('./components/pages/About.vue')
    },
    {
        name: 'posts',
        path: '/posts/:id',
        component: require('./components/posts/Post.vue')
    }
];

export default new VueRouter({
    mode: 'history',
    routes
});