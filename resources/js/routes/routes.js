




import Posts from "../components/Posts.vue";  // import this component
import PostDetails from "../components/PostDetails.vue";  
import Contact from "../components/Contact.vue";  
import Category from "../components/Category.vue";

const routes = [    // here we put all info of component (whice use as routes to SPA )  
    { 
        path: '/',
        component: Posts,
    },
    { 
        path: '/posts/:slug',
        component: PostDetails,
    },
    { 
        path: '/contact',
        component: Contact,
    },
    { 
        path: '/category/:slug',
        component: Category,
    }
]

export default routes;  // when import this file return routes