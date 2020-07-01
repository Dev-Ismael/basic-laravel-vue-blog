<template>
    

    <div class="row">
        <div class="col-md-8">
        
            <div class="media simple-post" v-for="post in posts" :key="post.id" >
                <img class="mr-3" :src="'img/'+post.img" alt="Generic placeholder image">
                <div class="media-body">
                    <h4 class="mt-0">
                    <router-link :to="'/posts/'+post.slug"> {{post.title}} </router-link> 
                </h4>
                    {{post.body}} 
                    <ul class="list-inline list-unstyled d-flex post-info">
                        <li><span><i class="fa fa-user"></i> posted by : <strong class="text-primary">  {{post.user.name}}  </strong> </span></li>
                        <li>|</li>
                        <li><span><i class="fa fa-calendar"></i> {{post.added_at}} </span></li>
                        <li>|</li>
                        <span><i class="fa fa-comment"></i> {{post.comments_count}} </span> 
                    </ul>
                </div>
            </div>

            <!-- Pagination -->
            <nav aria-label="...">
                <ul class="pagination float-right">
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            1
                        </a>
                    </li>
                    <li class="page-item active">
                        <span class="page-link">
                            2
                            <span class="sr-only">(current)</span>
                        </span>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            3
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>

        </div>

        <Sidebar></Sidebar>

    </div>



</template>

<script>
    import Sidebar from "./Sidebar";
    export default {

        data(){
            return{
                posts:{}  // var has empty array 
            }
        },
        components: {
            Sidebar ,
        },
        mounted() {
            this.getLatestPosts();
        },
        methods:{
            getLatestPosts(){
                axios.get("/api/posts")     // start link( (/) -> to start link from begianing) 
                // .then( resquest => console.log(resquest) )    // if success request there console all request
                .then( 
                    resquest =>{  // if there success request 
                        this.posts = resquest.data   // equale it with var posts in data
                    }
                )
                .then( error => console.log(error) )
            }
        }

    }
</script>
<style>

</style>