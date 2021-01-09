<template>
            <div class="carousel">
                <button  type="button" class="btn btn-primary dropdown-toggle fixed-top btn-sticky" data-toggle="dropdown">
                        Careers Menu
                    </button>
                    <div  class="dropdown-menu">
                             <a  class="dropdown-item pre-formatted" v-for="(dato, index) in dataUser" :key="index"  v-bind:href="'#section'+index" >
                                 <span class="text-dp-yellow"><strong>>></strong></span>
                                 <span v-text="dato.item.title"></span></a>
                    </div>
                <div class="" v-for="(dato, index) in dataUser" :key="index">
                    <div v-if="dato.item.element == 'div'|| dato.item.element =='div-group-head'" v-bind:id="'section'+index" class="card-header head-dp text-center">
                        <h2 class="text-white" v-text="dato.item.title"></h2>
                    </div>
                    <div v-if="dato.item.element == 'div'" class="card-body">
                        <div class="contianer">
                            <div  class="row">
                                <div class="col-sm-6">
                                    <img class="img-fluid max-h fade" v-bind:src="dato.item.image" alt="DedicatedPeople">
                                </div>
                                <div class="col-sm-6">
                                    <h4 class="pre-formatted text-left" v-text="dato.item.description"></h4>
                                    <br>
                                    <h4 class="pre-formatted text-left" v-for="detail in dato.detail" :key="detail.id">
                                        <span v-text="detail.description"></span> 
                                    </h4>
                                    <br>                           
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-if="dato.item.element == 'div-not-head'" v-bind:id="'section'+index" class="card-body">
                        <div class="col-sm-12 text-center">
                            <h2 class="text-dp" v-text="dato.item.title"></h2>
                        </div>
                        <div class="container">
                            <div  class="row">
                                <div class="col-sm-6">
                                    <img class="img-fluid max-h fade " v-bind:src="dato.item.image" alt="DedicatedPeople">
                                </div>
                                <div class="col-sm-6">
                                    <h4 class="pre-formatted text-left" v-text="dato.item.description"></h4>
                                    <br>
                                    <h4 class="pre-formatted text-left" v-for="detail in dato.detail" :key="detail.id">
                                        <span v-text="detail.description"></span> 
                                    </h4>
                                    <br> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-else-if="dato.item.element == 'div-group-img'" v-bind:id="'section'+index" class="card-body este">

                        <div class="col-sm-12">
                            <h2 class="text-center" v-text='dato.item.title'></h2>
                            <h4 class="text-left" v-text="dato.item.description"></h4>
                        </div>
                        <br>
                        <div class="col-sm-12"  v-for="detail in dato.detail" :key="detail.id">
                            <div class="row">
                                <div class="col-sm">
                                    <img class="img-fluid max-h " v-bind:src="dato.item.image" alt="DedicatedPeople">
                                </div>
                                <div class="col-sm">
                                    <h4 class="text-left" v-text="detail.description"></h4>
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
                                            <div class="col-sm-12 text-left">
                                                <img class="img-fluid max-h fade" v-bind:src="detail.image" alt="DedicatedPeople">
                                                <h3 class="text-dp" v-text="detail.name"></h3>
                                            </div>
                                            <div class="col-sm-12">
                                                <h4 class="text-left" v-text="detail.description"></h4>
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
