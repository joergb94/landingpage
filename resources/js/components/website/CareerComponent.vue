<template>
            <div class="carousel">
                <div class="" v-for="(dato, index) in dataUser" :key="index">
                    <div v-if="dato.item.element == 'div'|| dato.item.element =='div-group-head'" class="card-header head-dp text-center">
                        <h2 class="text-white" v-text="dato.item.title"></h2>
                    </div>
                    <div v-if="dato.item.element == 'div'" class="card-body">
                        <div  class="row">
                            <div class="col-sm-6">
                                <img class="img-fluid max-h" v-bind:src="dato.item.image" alt="DedicatedPeople">
                            </div>
                            <div class="col-sm-6">
                                <h3 v-text="dato.item.description"></h3>                          
                            </div>
                        </div>
                    </div>
                    <div v-if="dato.item.element == 'div-not-head'" class="card-body">
                        <div class="col-sm-12 text-center">
                            <h2 class="text-dp" v-text="dato.item.title"></h2>
                        </div>
                        <div  class="row">
                            <div class="col-sm-6">
                                <img class="img-fluid max-h" v-bind:src="dato.item.image" alt="DedicatedPeople">
                            </div>
                            <div class="col-sm-6">
                                <h3 v-text="dato.item.description"></h3>
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
                                    <img class="img-fluid max-h" v-bind:src="dato.item.image" alt="DedicatedPeople">
                                </div>
                                <div class="col-sm">
                                    <h3 class="text-center" v-text="detail.description"></h3>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                   <div v-else-if="dato.item.element == 'div-group-head'" class="card-body este">
                        <div class="row">
                            <div class="col-sm-3" v-for="detail in dato.detail" :key="detail.id">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <img class="img-fluid max-h" v-bind:src="detail.image" alt="DedicatedPeople">
                                            <h2 class="text-dp" v-text="detail.name"></h2>
                                        </div>
                                        <div class="col-sm-12">
                                            <h3 class="text-center" v-text="detail.description"></h3>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div v-if="dato.item.description != null" class="col-sm-12">
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
            url:'/site?page=4',
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
         
             this.ListUsers();
        }    
    }
</script>
