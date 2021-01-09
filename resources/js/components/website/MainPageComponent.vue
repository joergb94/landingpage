<template>
            <div class="carousel">
                 <button  type="button" class="btn btn-primary dropdown-toggle fixed-top btn-sticky" data-toggle="dropdown">
                        Home Menu
                    </button>
                    <div  class="dropdown-menu">
                             <a  class="dropdown-item pre-formatted" v-for="(dato, index) in dataUser" :key="index"  v-bind:href="'#section'+index" >
                                 <span class="text-dp-yellow"><strong>>></strong></span>
                                 <span v-text="dato.item.title"></span></a>
                    </div>
                <div class="" v-for="(dato, index) in dataUser" :key="index">
                    <div v-if="dato.item.element == 'div'" v-bind:id="'section'+index" class="card-header head-dp text-center">
                        <div class="container text-center">
                             <h2 class="text-white" v-text="dato.item.title"></h2>
                        </div>
                    </div>
                    <div v-if="dato.item.element == 'div'" class="card-body bg-dp-white">
                        <div class="container">
                            <div  class="row">
                            <div class="col-sm-6">
                                <img class="img-fluid max-h" v-bind:src="dato.item.image" alt="DedicatedPeople">
                            </div>
                            <div class="col-sm-6">
                                <h4 class="pre-formatted text-left" v-text="dato.item.description"></h4>
                                <br>
                                <h4 class="pre-formatted text-left" v-for="detail in dato.detail" :key="detail.id">
                                       <span v-text="detail.description"></span> 
                                </h4>
                                <br>  
                            </div>
                            <div class="col-sm-12 text-right">
                                    <button class="btn btn-link" @click="menuData()" ><h5 class="text-dp">More About us <strong>>></strong></h5></button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div v-if="dato.item.element == 'div-left'" v-bind:id="'section'+index" class="card-header head-dp text-center">
                        <div class="container text-center">
                             <h2 class="text-white" v-text="dato.item.title"></h2>
                        </div>
                    </div>
                    <div v-if="dato.item.element == 'div-left'"  class="card-body bg-dp-white">
                        <div class="container">
                             <div  class="row">
                                <div class="col-sm-6 text-left">
                                    <h3 class="text-left">
                                        <span   v-for="(title, i) in TitleBiColor(dato.item.description)" :key="i" 
                                                v-bind:class="title.class"
                                                v-text="title.text+' '">
                                        </span>
                                    </h3>
                                    <br>
                                    <h4 class="pre-formatted text-left" v-for="detail in dato.detail" :key="detail.id">
                                       <span v-text="detail.description"></span> 
                                    </h4>
                                    <br>                      
                                </div>
                                <div class="col-sm-6">
                                    <img class="img-fluid max-h fade" v-bind:src="dato.item.image" alt="DedicatedPeople">
                                </div>
                            </div>
                        </div>
                     </div>
                     <div v-if="dato.item.element == 'div-not-head'"  v-bind:id="'section'+index" class="card-body bg-dp-white">
                        <div class="col-sm-12 text-center">
                            <h2 class="text-dp" v-text="dato.item.title"></h2>
                        </div>
                        <div class="container">
                            <div  class="row">
                            <div class="col-sm-6">
                                <img class="img-fluid max-h fade" v-bind:src="dato.item.image" alt="DedicatedPeople">
                            </div>
                            <div class="col-sm-6 text-left">
                                <h4 v-text="dato.item.description"></h4>
                                <br>
                                <h4 class="pre-formatted text-left" v-for="detail in dato.detail" :key="detail.id">
                                       <span v-text="detail.description"></span> 
                                </h4>
                                <br>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    <div v-else-if="dato.item.element == 'slide'"  v-bind:id="'section'+index" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li v-bind:data-target="'#section'+index" data-slide-to="0" class="active"></li>
                            <li v-bind:data-target="'#section'+index" data-slide-to="1"></li>
                            <li v-bind:data-target="'#section'+index" data-slide-to="2"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div  v-for="(detail,index) in dato.detail" :key="index" v-bind:class="[index > 0? 'carousel-item slide-content-dp' : 'carousel-item active slide-content-dp']">
                                <img style="width:100%; height:100vh;" v-bind:src="detail.image" alt="Los Angeles">
                                <div class="slide-info-dp">
                                    <h2 class="slide-title-centered-dp text-warning fade" v-text="detail.name"></h2>
                                    <h4 class ="slide-content-centered-dp text-light fade" v-text="detail.description"></h4>
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" v-bind:href="'#section'+index" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" v-bind:href="'#section'+index" data-slide="next">
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
        menuData(){
                this.$emit("menu",2)
        },
         TitleBiColor(data){
            var text = data.split(" ");
            var No = text.length;
            console.log(No)
            var pos= parseInt(No/2);
             console.log(pos)
            var arrayBiColor = [];
            for (var i = 0; i < No; i++) {

                var dato = i < pos ? {text:text[i], class:'text-dp'} : {text:text[i], class:'text-dp-yellow'};
                 console.log(dato)
                 arrayBiColor.push(dato);

            }
            

           return arrayBiColor;
        },
        },
        mounted() {
            console.log('Component mounted.')
             this.ListUsers();
        }    
    }
</script>
