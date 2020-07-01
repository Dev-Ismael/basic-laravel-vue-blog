<template>
  
    <div class="col-md-4">

      <!-- Search Widget -->
      <div class="card my-4">
        <h5 class="card-header">Search</h5>
        <div class="card-body">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Go!</button>
                </span>
            </div>
        </div>
      </div>

      <!-- Categories Widget -->
      <div class="card my-4" v-if="categories">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12" v-for="(category , index) in categories" :key="index" >
                    <router-link to="hello"></router-link>
                </div>
            </div>
        </div>
      </div>
    
    </div>

</template>

<script>
export default {
    data(){
        return{
            categories: {}
        }
    },
    mounted() {
        this.getCategories();
    },
    methods:{

        getCategories(){
            axios.get("/api/categories")
            // .then( resquest => console.log(resquest) )    // if success request there console all request
            .then( 
                resquest =>{  // if there success request 
                    this.categories = resquest.data   // equale it with var posts in data
                }
            )
            .then( error => console.log(error) )
        },

    


    } 
}
</script>
