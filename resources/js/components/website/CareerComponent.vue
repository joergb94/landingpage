<template>
            <div class="carousel">
                <button  type="button" class="btn btn-primary dropdown-toggle btn-sticky btn-round" data-toggle="dropdown">
                    </button>
                    <div  class="dropdown-menu col-sm-12 col-md-4">
                             <a  class="dropdown-item pre-formatted" v-for="(dato, index) in dataUser" :key="index"  v-bind:href="'#section'+index" >
                                 <span class="text-dp-yellow"><strong>>></strong></span>
                                 <span v-text="dato.item.title"></span>
                            </a>
                    </div>
                <div class="" v-for="(dato, index) in dataUser" :key="index">
                    <div v-if="dato.item.element == 'div'|| dato.item.element =='div-group-head'" v-bind:id="'section'+index" class="card-header head-dp text-center">
                        <h1 class="text-white" v-text="dato.item.title"></h1>
                    </div>
                    <div v-if="dato.item.element == 'div'" class="card-body">
                        <div class="contianer">
                            <div  class="row">
                                <div class="col-sm-6">
                                    <img class="img-fluid max-h fade" v-bind:src="dato.item.image" alt="DedicatedPeople">
                                </div>
                                <div class="col-sm-6">
                                    <h5 class="pre-formatted text-left" v-text="dato.item.description"></h5>
                                    <br>
                                    <h5 class="pre-formatted text-left" v-for="detail in dato.detail" :key="detail.id">
                                        <span v-text="detail.description"></span> 
                                    </h5>
                                    <br>                           
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-if="dato.item.element == 'div-not-head'" v-bind:id="'section'+index" class="card-body">
                        <div class="col-sm-12 text-center">
                            <h1 class="text-dp" v-text="dato.item.title"></h1>
                        </div>
                        <div class="container">
                            <div  class="row">
                                <div class="col-sm-6">
                                    <img class="img-fluid fade " v-bind:src="dato.item.image" alt="DedicatedPeople">
                                </div>
                                <div class="col-sm-6">
                                    <h5 class="pre-formatted text-left" v-text="dato.item.description"></h5>
                                    <br>
                                    <h5 class="pre-formatted text-left" v-for="detail in dato.detail" :key="detail.id">
                                        <span v-text="detail.description"></span> 
                                    </h5>
                                    <br> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-else-if="dato.item.element == 'div-group-img'" v-bind:id="'section'+index" class="card-body este">

                        <div class="col-sm-12">
                            <h1 class="text-center" v-text='dato.item.title'></h1>
                            <h5 class="text-left" v-text="dato.item.description"></h5>
                        </div>
                        <br>
                        <div class="col-sm-12"  v-for="detail in dato.detail" :key="detail.id">
                            <div class="row">
                                <div class="col-sm">
                                    <img class="img-fluid max-h " v-bind:src="dato.item.image" alt="DedicatedPeople">
                                </div>
                                <div class="col-sm">
                                    <h5 class="text-left" v-text="detail.description"></h5>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                   <div v-else-if="dato.item.element == 'div-group-head'" v-bind:id="'section'+index" class="card-body este">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3" v-for="detail in dato.detail" :key="detail.id">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12 text-center">
                                                <img class="img-fluid fade" v-bind:src="detail.image" alt="DedicatedPeople">
                                                <h3 class="text-dp text-left" v-text="detail.name"></h3>
                                            </div>
                                            <div class="col-sm-12">
                                                <h5 class="text-left" v-text="detail.description"></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <div v-if="dato.item.description != null" class="col-sm-12">
                                    <h3 class="text-left" v-text='dato.item.description'></h3>
                                    <br>
                                </div>
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
        
        }, TitleBiColor(data){
            var text = data.split(" ");
            var No = text.length;
            console.log(No)
            var pos= parseInt(No/2);
             console.log(pos)
            var arrayBiColor = [];
            for (var i = 0; i < No; i++) {

                var dato = i < pos ? {text:text[i], class:'text-dp-yellow'} : {text:text[i], class:'text-dp'};
                 console.log(dato)
                 arrayBiColor.push(dato);

            }
            

           return arrayBiColor;
        },
        },
        mounted() {
         
             this.ListUsers();
        }    
    }
</script>
