<template>
            <div class="carousel">
                <div class="" v-for="(dato, index) in dataUser" :key="index">
                    <div v-if="dato.item.element == 'div'" class="card-header head-dp text-center"><h2 class="text-white" v-text="dato.item.title"></h2></div>
                    <div v-if="dato.item.element == 'div'" class="card-body">
                        <div  class="row">
                            <div class="col-sm-6">
                                <img class="img-fluid max-h" v-bind:src="dato.item.image" alt="Chania">
                            </div>
                            <div class="col-sm-6">
                                <br>
                                <h3 class="pre-formatted text-center" v-text="dato.item.description"></h3>
                            </div>
                        </div>


                    </div>
                    <div v-if="dato.item.element == 'div-left'" class="card-header head-dp text-center"><h2 class="text-white" v-text="dato.item.title"></h2></div>
                    <div v-if="dato.item.element == 'div-left'" class="card-body">
                        <div  class="row">
                             <div class="col-sm-6">
                                <h3 v-text="dato.item.description"></h3>
                                <ul>
                                    <li v-for="detail in dato.detail" :key="detail.id">{{detail.description}}</li>
                                </ul>  
                                                                
                            </div>
                            <div class="col-sm-6">
                                <img class="img-fluid max-h" v-bind:src="dato.item.image" alt="Chania">
                            </div>
                        </div>
                     </div>
                    <div v-else-if="dato.item.element == 'slide'" id="demo" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div  v-for="(detail,index) in dato.detail" :key="index" v-bind:class="[index > 0? 'carousel-item slide-content-dp' : 'carousel-item active slide-content-dp']">
                                <img style="width:100%; height:100vh;" v-bind:src="detail.image" alt="Los Angeles">
                                <div class="slide-info-dp">
                                    <h1 class="slide-title-centered-dp text-warning" v-text="detail.name"></h1>
                                    <h3 class ="slide-content-centered-dp text-light" v-text="detail.description"></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

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
            url:'/site?page=1',
            }
        },  
        
        methods : {
        ListUsers(){
            let me = this;
                main.ListItems(me.url).then(r => {
                    me.dataUser =r.data;
                })
                $(".content-site").fadeIn('slow');
        },
        },
        mounted() {
            console.log('Component mounted.')
             this.ListUsers();
        }    
    }
</script>
