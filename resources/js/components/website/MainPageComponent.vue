<template>
            <div class="carousel">
                 <button  type="button" class="btn btn-primary dropdown-toggle btn-sticky btn-round" data-toggle="dropdown">
                    </button>
                    <div  class="dropdown-menu col-sm-12 col-md-4 drop-div">
                             <a  class="dropdown-item pre-formatted" v-for="(dato, index) in dataUser" :key="index"  v-bind:href="'#section'+index" >
                                 <small class="text-dp-yellow pre-formatted"><strong>>></strong></small>
                                 <small  class="pre-formatted" v-text="dato.item.title"></small>
                            </a>
                    </div>
                <div class="" v-for="(dato, index) in dataUser" :key="index">
                    <div v-if="dato.item.element == 'div'" v-bind:id="'section'+index" class="card-header head-dp text-center">
                        <div class="container text-center">
                             <h1 class="text-white" v-text="dato.item.title.toUpperCase()"></h1>
                        </div>
                    </div>
                    <div v-if="dato.item.element == 'div'" class="card-body bg-dp-white no-margin-bottom">
                        <div class="container no-margin-bottom">
                            <div  class="row child-div no-margin-bottom">
                            <div class="col-sm-6 child-div no-margin-bottom">
                                <img class="image-conten" v-bind:src="dato.item.image" alt="DedicatedPeople">
                            </div>
                            <div class="col-sm-6 child-div">
                                <h5 class="pre-formatted text-left" v-text="dato.item.description"></h5>
                                <br>
                                <h5 class="pre-formatted text-left" v-for="detail in dato.detail" :key="detail.id">
                                       <span v-text="detail.description"></span> 
                                </h5>
                                <br> 
                                
                                    <button class="btn btn-link bottom-right text-dp" @click="$emit('click',1)" >More About us <strong>>></strong></button>
                          
                            </div>
                            
                        </div>
                        </div>
                    </div>
                    <div v-if="dato.item.element == 'div-left'" v-bind:id="'section'+index" class="card-header head-dp text-center">
                        <div class="container text-center">
                             <h1 class="text-white" v-text="dato.item.title.toUpperCase()"></h1>
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
                                    <h5 class="pre-formatted text-left" v-for="detail in dato.detail" :key="detail.id">
                                       <span v-text="detail.description"></span> 
                                    </h5>
                                    <br>
                                    <br>
                                    <button class="btn btn-link bottom-right text-dp" @click="$emit('click',2)" >More About Our Service <strong>>></strong></button>                     
                                </div>
                                <div class="col-sm-6">
                                    <img class="image-conten fade" v-bind:src="dato.item.image" alt="DedicatedPeople">
                                </div>
                            </div>
                        </div>
                     </div>
                     <div v-if="dato.item.element == 'div-not-head'"  v-bind:id="'section'+index" class="card-body bg-dp-white no-margin-bottom">
                        <div class="col-sm-12 text-center">
                            <h1 class="text-dp" v-text="dato.item.title.toUpperCase()"></h1>
                        </div>
                        <div class="container no-margin-bottom">
                            <div  class="row no-margin-bottom">
                            <div class="col-sm-6 no-margin-bottom">
                                <img class="image-conten fade no-margin-bottom" v-bind:src="dato.item.image" alt="DedicatedPeople">
                            </div>
                            <div class="col-sm-6 text-left no-margin-bottom">
                                <h5 v-text="dato.item.description"></h5>
                                <br>
                                <h5 class="pre-formatted text-left" v-for="detail in dato.detail" :key="detail.id">
                                       <span v-text="detail.description"></span> 
                                </h5>
                                <br>
                                 <br>
                                    <button class="btn btn-link bottom-right text-dp" @click="$emit('click',3)" >Work With Us <strong>>></strong></button>

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
                        <div class="carousel-inner bg-dp-white">
                            <div  v-for="(detail,index) in dato.detail" :key="index" v-bind:class="[index > 0? 'carousel-item slide-content-dp' : 'carousel-item active slide-content-dp']">
                                <img style="width:100%; height:100vh;" v-bind:src="detail.image" alt="Los Angeles">
                                <div class="slide-info-dp">
                                    <div class="container">
                                        <h1 class="slide-title-centered-dp text-warning fade" v-text="detail.name"></h1>
                                        <h5 class ="slide-content-centered-dp text-light fade" v-text="detail.description"></h5>
                                    </div>
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
