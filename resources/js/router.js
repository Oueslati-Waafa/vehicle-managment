import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

//import views
import UsersList from './components/user/UsersList.vue';
import VehiclesList from './components/vehicles/VehiclesList.vue';
import Home from './components/Home.vue';
import App from './App.vue';
import AddUser from './components/user/AddUsers.vue';



const routes = [
    {
        path: '/app',
        name: '/app',
        component: App
    },
    {
        path: '/dashboard',
        name: '/dashboard',
        component: Home
    },
    { 
        name:'/vehicles',
        path: '/vehicles', 
        component: VehiclesList ,
    },
    { 
        name:'/users',
        path: '/users', 
        component: UsersList ,
    },
    { 
        name:'/add_user',
        path: '/add_user', 
        component: AddUser ,
    },
   
  ];

  export default new VueRouter({
    routes,
    mode: 'history'
  })