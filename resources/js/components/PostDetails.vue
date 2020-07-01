<template>
    
    
    <div class="row">

        <!-- Post Content Column -->
        <div class="col-md-8">

            <!-- Title -->
            <h1 class="mt-4" v-if="post" > {{ post.title }} </h1>
            <!-- Category -->
            <p class="lead">
                by
                <a :href="'/category/'+post.category.slug" v-if="post.category" > {{ post.category.title}} </a> <!-- v-if here for warning properties -->
            </p>
            <hr>
            <!-- Date/Time -->
            <p>
                Posted on <strong class="badge badge-primary p-1"> {{ post.added_at}} </strong> 
                <span class="float-right"><strong class="badge badge-info p-1"> {{ post.comments_count}}  </strong> comments</span>
            </p>
            <hr>
            <!-- Preview Image -->
            <img class="img-fluid rounded" :src="'/img/'+post.img" style="width:900px;max-height:300px" alt="">
            <hr>
            <!-- Post Content -->
            <p class="lead"> {{ post.body }} </p>
            <hr>
            <!-- Comments Form -->
            <div class="card my-4">
                <h5 class="card-header">Leave a Comment:</h5>
                <div class="card-body">
                    <form>
                    <div class="form-group">
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <!-- Single Comment -->
            <div class="comment-container" v-if="comments.length > 0">
                <div class="media mb-4" v-for="(comment , index ) in comments" :key="index">
                    <img class="d-flex mr-3 rounded-circle" :src="'/img/'+comment.user.img" alt="" style="width:50px">
                    <div class="media-body">
                        <h5 class="mt-0"> {{ comment.user.name }} </h5>
                        {{ comment.body }}
                    </div>
                </div>
            </div>

        </div>

        <Sidebar></Sidebar>

    </div>

</template>

<script>
    import Sidebar from './Sidebar.vue';
    export default {

        data(){
            return{
                post: {},
                comments: {},
            }
        },
        components: {
            Sidebar
        },
        mounted(){
            this.getPost();
        },
        methods:{
            getPost(){
                // console.log( this.$route );
                axios.get("/api/posts/" + this.$route.params.slug )     // start link( (/) -> to start link from begianing) 
                // .then( resquest => console.log(resquest) )    // if success request there console all request
                .then( 
                    resquest =>{  // if there success request 
                        this.post     = resquest.data     // equale it with var posts in data
                        this.comments = resquest.data.comments // equale it with var posts in data
                    }
                )
                .then( error => console.log(error) )
            }
        }

    }
</script>
<style>

</style>