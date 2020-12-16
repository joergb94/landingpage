<template>
            <div class="carousel">
                <div class="" v-for="(dato, index) in dataUser" :key="index">
                    <div v-if="dato.item.element == 'div'" class="card-header head-dp text-center" > <h2 class="text-white" v-text="dato.item.title"></h2></div>
                    <div v-if="dato.item.element == 'div'" class="card-body">
                        <div  class="row">
                            <div class="col-sm-6">
                                <img class="img-fluid rounded max-h" v-bind:src="dato.item.image"  alt="Chania">
                            </div>
                            <div class="col-sm-6">
                                <h3 v-text="dato.item.description"></h3>
                                <ul>
                                    <li v-for="detail in dato.detail" :key="detail.id">{{detail.description}}</li>
                                </ul>  
                                                                
                            </div>
                        </div>
                    </div>
                    <div v-if="dato.item.element == 'div-left'" class="card-header head-dp text-center" > <h2 class="text-white" v-text="dato.item.title"></h2></div>
                    <div v-if="dato.item.element == 'div-left'" class="card-body">
                        <div  class="row">
                             <div class="col-sm-6">
                                <h3 v-text="dato.item.description"></h3>
                                <ul>
                                    <li v-for="detail in dato.detail" :key="detail.id">{{detail.description}}</li>
                                </ul>  
                                                                
                            </div>
                            <div class="col-sm-6">
                                <img class="img-fluid rounded max-h" v-bind:src="dato.item.image" alt="Chania">
                            </div>
                        </div>
                     </div>
                    <div v-else-if="dato.item.element == 'div-group-img'" class="card-body este">

                        <div class="col-sm-12">
                            <h2 class="text-center" v-text='dato.item.title'></h2>
                            <h6 class="text-center" v-text="dato.item.description"></h6>
                        </div>
                        <br>
                        <div class="col-sm-12"  v-for="detail in dato.detail" :key="detail.id">
                            <div class="row">
                                <div class="col-sm">
                                    <img class="img-fluid max-h" v-bind:src="dato.item.image" alt="Chania">
                                </div>
                                <div class="col-sm">
                                    <h3 class="text-center" v-text="detail.description"></h3>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                   <div v-else-if="dato.item.element == 'div-group'" class="card-body este">

                        <div class="col-sm-12">
                            <h2 class="text-center" v-text='dato.item.title'></h2>
                            <br>
                        </div>
                        <div class="row">
                            <div class="col-sm-6" v-for="detail in dato.detail" :key="detail.id">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div v-if="detail.image !== null" class="row">
                                                <div class="col-sm-4">
                                                    <img class="img-fluid max-icon" v-bind:src="detail.image" alt="Chania">
                                                </div>
                                                <div class="col-sm-8 text-center">
                                                    <br>
                                                    <h2>{{detail.name}}</h2>
                                                    <br>
                                                    <div class="col-sm-12">
                                                        <h3 class="text-center" v-text="detail.description"></h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div  class="col-sm-12 text-center" v-else>
                                                    <br>
                                                    <h2>{{detail.name}}</h2>
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
                                <h2 class="text-center" v-text='dato.item.description'></h2>
                                <br>
                            </div>
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
                $(".content-site").fadeIn(3000);
        
        },
        },
        mounted() {
            console.log('Component mounted.')
             this.ListUsers();
        }    
    }
</script>
