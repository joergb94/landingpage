<template>
            <div class="carousel">
                <div class="" v-for="(dato, index) in dataUser" :key="index">
                    <div v-if="dato.item.element == 'div'" class="card-header head-dp text-center" > <h2 class="text-white" v-text="dato.item.title"></h2></div>
                    <div v-if="dato.item.element == 'div'" class="card-body bg-dp-white">
                        <div  class="row">
                            <div class="col-sm-6">
                                <img class="img-fluid rounded max-h" v-bind:src="dato.item.image"  alt="DedicatedPeople">
                            </div>
                            <div class="col-sm-6">
                                <h3 class="text-dp-yellow" v-text="dato.item.description"></h3>
                                <br>
                                <ul class="text-left">
                                   <li v-for="detail in dato.detail" :key="detail.id">
                                        <h4 v-text="detail.description"></h4>
                                        <br>
                                    </li>
                                </ul>                      
                            </div>
                        </div>
                    </div>
                    <div v-if="dato.item.element == 'div-left'" class="card-header head-dp text-center" > <h2 class="text-white" v-text="dato.item.title"></h2></div>
                    <div v-if="dato.item.element == 'div-left'" class="card-body bg-dp-white">
                        <div  class="row">
                             <div class="col-sm-6">
                                <h3 v-text="dato.item.description"></h3>
                                 <br>
                                <ul class="text-left">
                                   <li v-for="detail in dato.detail" :key="detail.id">
                                        <h4 v-text="detail.description"></h4>
                                        <br>
                                    </li>
                                </ul>                                  
                            </div>
                            <div class="col-sm-6">
                                <img class="img-fluid rounded max-h" v-bind:src="dato.item.image" alt="DedicatedPeople">
                            </div>
                        </div>
                     </div>
                    <div v-else-if="dato.item.element == 'div-group-img'" class="card-body bg-dp-white">

                        <div class="col-sm-12">
                            <h2 class="text-center" v-text='dato.item.title'></h2>
                            <h6 class="text-center" v-text="dato.item.description"></h6>
                        </div>
                        <br>
                        <div class="col-sm-12"  v-for="detail in dato.detail" :key="detail.id">
                            <div class="row">
                                <div class="col-sm">
                                    <img class="img-fluid max-h" v-bind:src="dato.item.image" alt="DedicatedPeople">
                                </div>
                                <div class="col-sm">
                                    <h3 class="text-center" v-text="detail.description"></h3>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div v-else-if="dato.item.element == 'div-group'" class="card-body bg-dp-white">

                        <div class="col-sm-12">
                            <h2 class="text-center text-dp" v-text='dato.item.title'></h2>
                            <br>
                        </div>
                        <div class="row">
                            <div class="col-sm-6" v-for="detail in dato.detail" :key="detail.id">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div v-if="detail.image !== null" class="row">
                                                <div class="col-sm-4">
                                                    <img class="img-fluid max-icon" v-bind:src="detail.image" alt="DedicatedPeople">
                                                </div>
                                                <div class="col-sm-8 text-center">
                                                    <br>
                                                    <h3 class="text-dp" v-text="detail.name"></h3>
                                                    <br>
                                                    <div class="col-sm-12">
                                                        <h3 class="text-center" v-text="detail.description"></h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div  class="col-sm-12 text-center" v-else>
                                                    <br>
                                                    <h2 class="text-dp" v-text="detail.name"></h2>
                                                    <br>
                                                    <div class="col-sm-12">
                                                        <h3 class="text-center" v-text="detail.description"></h3>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-sm-6">
                                <h2 class="text-center text-dp-yellow" v-text='dato.item.description'></h2>
                                <br>
                            </div>
                        </div>


                    </div>
                    <div v-if="dato.item.element == 'div-not-head'" class="card-body bg-dp-white">
                        <div class="col-sm-12 text-center">
                            <h2 class="text-dp" v-text="dato.item.title"></h2>
                        </div>
                        <div  class="row">
                            <div class="col-sm-6">
                                <img class="img-fluid max-h" v-bind:src="dato.item.image" alt="DedicatedPeople">
                            </div>
                            <div class="col-sm-6">
                                 <h3 class="text-warning" v-text="dato.item.description"></h3>
                                 <ul>
                                   <li v-for="detail in dato.detail" :key="detail.id">
                                        <h6 v-text="detail.description"></h6>
                                    </li>
                                </ul> 
                            </div>
                        </div>
                    </div>
                    <div v-if="dato.item.element == 'div-not-head-left'" class="card-body bg-dp-white">
                        <div class="col-sm-12 text-center">
                            <h2 class="text-dp" v-text="dato.item.title"></h2>
                        </div>
                        <div  class="row">
                            <div class="col-sm-6 text-center">
                                <h3 class="text-dp-yellow" v-text="dato.item.description"></h3>
                                <br>
                                 <ul class="text-left">
                                   <li v-for="detail in dato.detail" :key="detail.id">
                                        <h4 v-text="detail.description"></h4>
                                        <br>
                                    </li>
                                </ul> 
                            </div>
                            <div class="col-sm-6">
                                <img class="img-fluid max-h" v-bind:src="dato.item.image" alt="DedicatedPeople">
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
            url:'/site?page=3',
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
