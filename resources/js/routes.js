import Vue from 'vue'
import VueRouter from 'vue-router'
import store from './store'
import Home from './views/Home'
import User from './views/User'
import Resturant from './views/Resturant'
import Item from './views/Item'
import Size from './views/Size'
import Suggestion from './views/Suggestion'
import Decision from './views/Decision'
import Order from './views/Order'
import OrderItem from './views/OrderItem'
import OrderGroup from './views/OrderGroup'
import UserOrder from './views/UserOrder'
import NotFound from './views/NotFound'
import common from '@/js/utils/common'

Vue.use(VueRouter)
let rootUrl = document.head.querySelector('meta[name="root-url"]').content;

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: rootUrl + 'home',
            name: 'home',
            component: Home
        },
        {
            path: rootUrl + 'userOrders',
            name: 'user-order',
            component: UserOrder
        },
        {
            path: rootUrl + 'ordergroup',
            name: 'order-item-group',
            component: OrderGroup
        },
        {
            path: rootUrl + 'orderitems',
            name: 'order-item',
            component: OrderItem
        },
        {
            path: rootUrl + 'orders',
            name: 'order',
            component: Order
        },
        {
            path: rootUrl + 'decisions',
            name: 'decision',
            component: Decision
        },
        {
            path: rootUrl + 'suggestions',
            name: 'suggestion',
            component: Suggestion
        },
        {
            path: rootUrl + 'sizes',
            name: 'size',
            component: Size
        },
        {
            path: rootUrl + 'items',
            name: 'item',
            component: Item
        },
        {
            path: rootUrl + 'resturants',
            name: 'resturant',
            component: Resturant
        },
        {
            path: rootUrl + 'users',
            name: 'user',
            component: User
        },
        {
            path: '*',
            name:'not-found',
            component: NotFound
        }
    ]
})
/*
const gatePages = [
    rootUrl + 'profile',

];

router.beforeEach((to, from, next) => {
    store.dispatch('setLoader', true)
    // Check
    var path = to.fullPath;

    // redirect to login page if not logged in and trying to access a restricted page
    if (!store.state.user.userToken && gatePages.indexOf(to.path) !== -1) {
       store.dispatch('setLoginDialog', true)
       return next(rootUrl+'login')
    }
    else{
        next();
    }

    if (store.state.user.userToken && to.path === rootUrl + 'login') {
        return next(rootUrl);
    }

    if (store.state.user.userToken && to.path === rootUrl + 'register') {
        return next(rootUrl);
    }

   })*/

export default router
