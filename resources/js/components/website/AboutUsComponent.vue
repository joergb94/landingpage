<template>
            <div class="carousel">
                <button  type="button" class="btn btn-primary dropdown-toggle fixed-top btn-sticky" data-toggle="dropdown">
                        About Us Menu
                    </button>
                    <div  class="dropdown-menu col-sm-12 col-md-6">
                             <a  class="dropdown-item pre-formatted" v-for="(dato, index) in dataUser" :key="index"  v-bind:href="'#section'+index" >
                                 <span class="text-dp-yellow"><strong>>></strong></span>
                                 <span v-text="dato.item.title"></span></a>
                    </div>

                <div class="" v-for="(dato, index) in dataUser" :key="index">
                    <div v-if="dato.item.element == 'div'" v-bind:id="'section'+index" class="card-header head-dp text-center">
                        <h2 class="text-white" v-text="dato.item.title"></h2>
                    </div>
                    <div v-if="dato.item.element == 'div'" class="card-body">
                        <div  class="row">
                            <div class="col-sm-6">
                                <img class="img-fluid max-h fade" v-bind:src="dato.item.image" alt="DedicatedPeople">
                            </div>
                            <div class="col-sm-6">
                                <h4 v-text="dato.item.description"></h4>
                            </div>
                        </div>


                    </div>
                    
                    <div v-if="dato.item.element == 'div-not-head'" v-bind:id="'section'+index" class="card-body">
                        <div class="col-sm-12 text-center">
                            <h2 class="text-dp" v-text="dato.item.title"></h2>
                            <h3 class="text-dp" v-text="dato.item.description"></h3>
                        </div>
                        <div class="container">
                            <div  class="row">
                                <div class="col-sm-6">
                                    <img class="img-fluid max-h fade" v-bind:src="dato.item.image" alt="DedicatedPeople">
                                </div>
                                <div class="col-sm-6">
                                    <h4 class="pre-formatted text-left" v-for="detail in dato.detail" :key="detail.id">
                                       <span v-text="detail.description"></span> 
                                    </h4>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div v-else-if="dato.item.element == 'div-group-img'"  v-bind:id="'section'+index" class="card-body bg-dp-white">

                        <div class="container">
                            <h2 class="text-center">
                                        <span   v-for="(title, i) in TitleBiColor(dato.item.title)" :key="i" 
                                                v-bind:class="title.class"
                                                v-text="title.text+' '">
                                        </span>
                            </h2>
                            <!--<h3 class="text-left" v-text="dato.item.description"></h3>-->
                        </div>
                        <br>
                        <div class="container"  v-for="detail in dato.detail" :key="detail.id">
                            <div class="row">
                                <div class="col-sm fade" v-if="detail.image !== null">
                                    <img class="img-fluid max-h " v-bind:src="detail.image" alt="DedicatedPeople">
                                </div>
                                <div class="col-sm fade">
                                    
                                    <span class="badge badge-dark col-sm-12">
                                        <h4 class="text-center text-warning"  v-text="detail.name"></h4>
                                    </span>
                                    <h4 class="text-left" v-text="detail.description"></h4>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                   <div v-else-if="dato.item.element == 'div-group'" v-bind:id="'section'+index" class="card-body bg-dp-white">

                        <div class="col-sm-12">
                            <h2 class="text-center text-dp" v-text='dato.item.title'></h2>
                            <h3 class="text-left" v-text="dato.item.description"></h3>
                            <br>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-4" v-for="detail in dato.detail" :key="detail.id">
                                    <div class="card-dp-gray fade">
                                        <div class="row">
                                            <div class="col-sm-12 text-left" v-if="detail.image !== null">
                                                <img class="img-fluid max-icon" v-bind:src="detail.image" alt="DedicatedPeople">
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="container">
                                                    <h4 class="text-left" v-text="detail.description"></h4>
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
                    <div  v-if="dato.item.element == 'div-yellow'" v-bind:id="'section'+index" class="container-yellow col-sm-12">
                        <img class="img-yellow" v-bind:src="dato.item.image" alt="DedicatedPeople">
                        <div class="centered">
                            <br>
                            <h2 class="text-dp fade" v-text="dato.item.title"></h2>
                            <h4 v-text="dato.item.description"></h4>
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
        
        }, TitleBiColor(data){
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
