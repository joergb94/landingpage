<template>
            <div class="carousel">
                <div class="" v-for="(dato, index) in dataUser" :key="index">
                    <div v-if="dato.item.element == 'div'" class="card-header head-dp text-center">
                        <h2 class="text-white" v-text="dato.item.title"></h2>
                    </div>
                    <div v-if="dato.item.element == 'div'" class="card-body">
                        <div  class="row">
                            <div class="col-sm-6">
                                <img class="img-fluid max-h" v-bind:src="dato.item.image" alt="DedicatedPeople">
                            </div>
                            <div class="col-sm-6">
                                <h4 v-text="dato.item.description"></h4>
                            </div>
                        </div>


                    </div>
                    
                    <div v-if="dato.item.element == 'div-not-head'" class="card-body">
                        <div class="col-sm-12 text-center">
                            <h2 class="text-dp" v-text="dato.item.title"></h2>
                            <h4 class="text-dp" v-text="dato.item.description"></h4>
                        </div>
                        <div class="container">
                            <div  class="row">
                                <div class="col-sm-6">
                                    <img class="img-fluid max-h" v-bind:src="dato.item.image" alt="DedicatedPeople">
                                </div>
                                <div class="col-sm-6">
                                    <h4 class="pre-formatted text-center" v-for="detail in dato.detail" :key="detail.id">
                                       <span v-text="detail.description"></span> 
                                    </h4>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div v-else-if="dato.item.element == 'div-group-img'" class="card-body bg-dp-white">

                        <div class="col-sm-12">
                            <h2 class="text-center text-dp" v-text='dato.item.title'></h2>
                            <h4 class="text-center" v-text="dato.item.description"></h4>
                        </div>
                        <br>
                        <div class="container"  v-for="detail in dato.detail" :key="detail.id">
                            <div class="row">
                                <div class="col-sm" v-if="detail.image !== null">
                                    <img class="img-fluid max-h" v-bind:src="detail.image" alt="DedicatedPeople">
                                </div>
                                <div class="col-sm">
                                    
                                    <span class="badge badge-dark col-sm-12">
                                        <h4 class="text-center text-warning"  v-text="detail.name"></h4>
                                    </span>
                                    <h4 class="text-center" v-text="detail.description"></h4>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                   <div v-else-if="dato.item.element == 'div-group'" class="card-body bg-dp-white">

                        <div class="col-sm-12">
                            <h2 class="text-center text-dp" v-text='dato.item.title'></h2>
                            <h4 class="text-center" v-text="dato.item.description"></h4>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4" v-for="detail in dato.detail" :key="detail.id">
                                    <div class="card-dp-gray">
                                        <div class="row">
                                            <div class="col-sm-12 text-center" v-if="detail.image !== null">
                                                <img class="img-fluid max-icon" v-bind:src="detail.image" alt="DedicatedPeople">
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="container">
                                                    <h6 class="text-center" v-text="detail.description"></h6>
                                                </div>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                       


                    </div>  
                    <div  v-if="dato.item.element == 'div-yellow'" class="container-yellow col-sm-12">
                        <img class="img-yellow" v-bind:src="dato.item.image" alt="DedicatedPeople">
                        <div class="centered">
                            <br>
                            <h1 class="text-dp" v-text="dato.item.title"></h1>
                            <p v-text="dato.item.description"></p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
</template>

<script>
    import main from '../main'
    export default {
         data () {
            return {
            dataUser:[],
            url:'/site?page=2',
            }
        },  
        
        methods : {
        ListUsers(){
            let me = this;
                main.ListItems(me.url).then(r => {
                    me.dataUser =r.data;
                ;})
                $(".content-site").fadeIn('slow');
        
        },
        },
        mounted() {
            console.log('Component mounted.')
             this.ListUsers();
        }    
    }
</script>
