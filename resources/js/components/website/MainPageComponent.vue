<template>
            <div class="col-sm-12">
                <div class="" v-for="item in dataUser" :key="item.id">
                    <div v-if="item.element == 'div'" class="card-header head-dp" v-text="item.title"></div>
                    <div v-if="item.element == 'div'" class="card-body">
                        <div  class="row">
                            <div class="col-sm-6">
                                <img class="img-fluid" src="https://www.solidbackgrounds.com/images/2560x1440/2560x1440-gray-solid-color-background.jpg" alt="Chania">
                            </div>
                            <div class="col-sm-6">
                                <h3 v-text="item.description"></h3>
                            </div>
                        </div>


                    </div>
                    <div v-else-if="item.element == 'slide'" id="demo" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active slide-content-dp">
                                <img class="img-fluid" src="https://www.solidbackgrounds.com/images/2560x1440/2560x1440-gray-solid-color-background.jpg" alt="Los Angeles">
                                <div class="slide-info-dp">
                                    <h1 class="slide-title-centered-dp text-warning" v-text="item.title"></h1>
                                    <h3 class ="slide-content-centered-dp text-light" v-text="item.description"></h3>
                                </div>
                            </div>
                            <div class="carousel-item slide-content-dp">
                                <img class="img-fluid" src="https://www.solidbackgrounds.com/images/2560x1440/2560x1440-gray-solid-color-background.jpg" alt="Los Angeles">
                                <div class="slide-title-centered-dp text-danger">Centered</div>
                                <div class="slide-content-centered-dp">Centered</div>
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
                   <div v-if="item.element == 'div-group'" class="card-body">

                        <div class="col-sm-12">
                            <h2 v-text='item.title'></h2>
                            <span v-text="item.description"></span>
                        </div>
                        <div  class="row">
                            <div class="col-sm">
                                <img class="img-fluid" src="https://www.solidbackgrounds.com/images/2560x1440/2560x1440-gray-solid-color-background.jpg" alt="Chania">
                            </div>
                            <div class="col-sm">
                                <h3 v-text="item.description"></h3>
                            </div>
                            <div class="col-sm">
                                <img class="img-fluid" src="https://www.solidbackgrounds.com/images/2560x1440/2560x1440-gray-solid-color-background.jpg" alt="Chania">
                            </div>
                            <div class="col-sm">
                                <h3 v-text="item.description"></h3>
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
            url:'/site',
            }
        },  
        
        methods : {
        ListUsers(){
            let me = this;
                main.ListItems(me.url).then(r => {
                    me.dataUser =r.data;
                ;})
        
        },
        },
        mounted() {
            console.log('Component mounted.')
             this.ListUsers();
        }    
    }
</script>
