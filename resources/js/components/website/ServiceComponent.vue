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
                    <div v-if="dato.item.element == 'div'" v-bind:id="'section'+index" class="card-header head-dp text-center" >
                        <div class="container text-center">
                             <h2 class="text-white" v-text="dato.item.title"></h2>
                        </div>
                    </div>
                    <div v-if="dato.item.element == 'div'" class="card-body bg-dp-white">
                        <div class="container">
                            <div  class="row">
                                <div class="col-sm-6">
                                    <img class="image-conten fade" v-bind:src="dato.item.image"  alt="DedicatedPeople">
                                </div>
                                <div class="col-sm-6">
                                    <h3 class="text-left">
                                        <span   v-for="(title, i) in TitleBiColor(dato.item.description,1)" :key="i" 
                                                v-bind:class="title.class"
                                                v-text="title.text+' '">
                                        </span>
                                    </h3>
                                    <br>
                                    <ul class="text-left">
                                    <li class="fade" v-for="detail in dato.detail" :key="detail.id">
                                            <h5 v-text="detail.description"></h5>
                                            <br>
                                        </li>
                                    </ul>                      
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div v-if="dato.item.element == 'div-left'" v-bind:id="'section'+index" class="card-header head-dp text-center" >
                        <div class="container text-center">
                             <h2 class="text-white" v-text="dato.item.title.toUpperCase()"></h2>
                        </div>
                    </div>
                    <div v-if="dato.item.element == 'div-left'" class="card-body bg-dp-white">
                        <div class="container">
                            <div  class="row">
                                <div class="col-sm-6">
                                     <h3 class="text-left">
                                        <span   v-for="(title, i) in TitleBiColor(dato.item.description,1)" :key="i" 
                                                v-bind:class="title.class"
                                                v-text="title.text+' '">
                                        </span>
                                    </h3>
                                    <br>
                                    <ul class="text-left">
                                    <li class="fade" v-for="detail in dato.detail" :key="detail.id">
                                            <h5 v-text="detail.description"></h5>
                                            <br>
                                        </li>
                                    </ul>                                  
                                </div>
                                <div class="col-sm-6">
                                    <img class="image-conten fade " v-bind:src="dato.item.image" alt="DedicatedPeople">
                                </div>
                            </div>
                        </div>
                     </div>
                    <div v-else-if="dato.item.element == 'div-group-img'" v-bind:id="'section'+index" class="card-body bg-dp-white">

                        <div class="col-sm-12">
                            <h2 class="text-center" v-text='dato.item.title.toUpperCase()'></h2>
                            <h6 class="text-left" v-text="dato.item.description"></h6>
                        </div>
                        <br>
                        <div class="container"  v-for="detail in dato.detail" :key="detail.id">
                            <div class="row">
                                <div class="col-sm fade">
                                    <img class="img-fluid max-h" v-bind:src="dato.item.image" alt="DedicatedPeople">
                                </div>
                                <div class="col-sm fade">
                                    <h2 class="text-left" v-text="detail.description"></h2>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div v-else-if="dato.item.element == 'div-group'" v-bind:id="'section'+index" class="card-body bg-dp-white">

                        <div class="col-sm-12">
                             <h2 class="text-center">
                                    <span  v-for="(title, i) in TitleBiColor(dato.item.title.toUpperCase(),2)" :key="i" 
                                                v-bind:class="title.class"
                                                v-text="title.text+' '">
                                    </span>
                                </h2>
                            <br>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6" v-for="detail in dato.detail" :key="detail.id">
                                                <div v-if="detail.image !== null" class="col-sm-12 fade">
                                                    <div  class="row">
                                                        <div class="col-sm-12 col-md-4">
                                                            <img class="img-fluid" v-bind:src="detail.image" alt="DedicatedPeople">
                                                        </div>
                                                        <div class="col-sm-12 col-md-8 text-left">
                                                            <br>
                                                            <div class="col-sm-12 text-left">
                                                                <button class="btn btn-link text-dp"><h3 class="text-dp pre-formatted text-left"  @click="toggleItems(detail)" v-text="detail.name"></h3></button>
                                                            </div>
                                                            <br>
                                                            <div v-bind:id="'panel'+detail.id" class="col-sm-12 text-left" style="display:none">
                                                                <h5 class="" v-text="detail.description"></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div  class="col-sm-12 text-left fade" v-else>
                                                        <br>
                                                        <h3 class="text-dp" v-text="detail.name"></h3>
                                                        <br>
                                                        <div class="col-sm-12">
                                                            <h5 class="text-left" v-text="detail.description"></h5>
                                                        </div>
                                                </div>
                                    
                                    <br>
                                </div>
                                <div class="col-sm-6">
                                    <div class="container fade">
                                         <h2 class="text-center">
                                            <span  v-for="(title, i) in TitleBiColor(dato.item.description,2)" :key="i" 
                                                v-bind:class="title.class"
                                                v-text="title.text+' '">
                                            </span>
                                        </h2>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                        


                    </div>
                    <div v-if="dato.item.element == 'div-not-head'" v-bind:id="'section'+index" class="card-body bg-dp-white">
                        <div class="container">
                              <div  class="row">
                                <div class="col-sm-7">
                                    <img class="image-conten fade" v-bind:src="dato.item.image" alt="DedicatedPeople">
                                </div>
                                <div class="col-sm-5 text-left">
                                     <h2 class="text-left">
                                        <span   v-for="(title, i) in TitleBiColor(dato.item.title,2)" :key="i" 
                                                v-bind:class="title.class"
                                                v-text="title.text+' '">
                                        </span>
                                    </h2>
                                    <ul>
                                      <li class="fade" v-for="detail in dato.detail" :key="detail.id">
                                            <h5 v-text="detail.description"></h5>
                                            <br>
                                        </li>

                                        
                                    </ul> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-if="dato.item.element == 'div-not-head-left'" v-bind:id="'section'+index" class="card-body bg-dp-white">
                        <div class="container">
                            <div  class="row">
                                <div class="col-sm-5 text-left">
                                     <h2 class="text-left">
                                        <span   v-for="(title, i) in TitleBiColor(dato.item.title,2)" :key="i" 
                                                v-bind:class="title.class"
                                                v-text="title.text+' '">
                                        </span>
                                    </h2>
                                    <br>
                                    <ul class="text-left">
                                    <li class="fade" v-for="detail in dato.detail" :key="detail.id">
                                            <h5 v-text="detail.description"></h5>
                                            <br>
                                        </li>
                                    </ul> 
                                </div>
                                <div class="col-sm-7">
                                    <img class="image-conten" v-bind:src="dato.item.image" alt="DedicatedPeople">
                            </div>
                        </div>
                        </div>
                        
                    </div>
                    <div  v-if="dato.item.element == 'div-yellow'" v-bind:id="'section'+index" class="container-yellow col-sm-12">
                        <img class="img-yellow" v-bind:src="dato.item.image" alt="DedicatedPeople">
                        <div class="centered">
                            <br>
                            <h2 class="text-dp" v-text="dato.item.title.toUpperCase()"></h2>
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
            DataBiColor:[],
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
        TitleBiColor(data,type){
            var text = data.split(" ");
            var No = text.length;
            console.log(No)
            var pos= parseInt(No/2);
             console.log(pos)
            var arrayBiColor = [];
            if(type == 1){
                for (var i = 0; i < No; i++) {

                 var dato = i < pos ? {text:text[i], class:'text-dp-yellow'} : {text:text[i], class:'text-dp'};
                 arrayBiColor.push(dato);

                }

            } else {

                for (var i = 0; i < No; i++) {

                 var dato = i < pos ? {text:text[i], class:'text-dp'} : {text:text[i], class:'text-dp-yellow'};
                 arrayBiColor.push(dato);

                }
            }

           return arrayBiColor;
        },
        toggleItems(data){
            $('#panel'+data.id).slideToggle();
        },
        dropShow(){
             $(".drop-div").toggle();
        }
        },
        mounted() {
            console.log('Component mounted.')
             this.ListUsers();
        }    
    }
</script>
