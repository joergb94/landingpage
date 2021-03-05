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
                        <h1 class="text-white" v-text="dato.item.title.toUpperCase()"></h1>
                    </div>
                    <div v-if="dato.item.element == 'div'" class="card-body">
                        <div  class="row">
                            <div class="col-sm-6">
                                <img class="image-conten fade" v-bind:src="dato.item.image" alt="DedicatedPeople">
                            </div>
                            <div class="col-sm-6">
                                <h5 v-text="dato.item.description"></h5>
                            </div>
                        </div>


                    </div>
                    
                    <div v-if="dato.item.element == 'div-not-head'" v-bind:id="'section'+index" class="card-body bg-dp-white no-margin-bottom">
                        <div class="container no-margin-bottom">
                            <div  class="row no-margin-bottom">
                                <div class="col-sm-7 no-margin-bottom">
                                    <img class="image-conten fade no-margin-bottom" v-bind:src="dato.item.image" alt="DedicatedPeople">
                                </div>
                                <div class="col-sm-5">
                                     <div class="col-sm-12 text-left">
                                        <h2>
                                            <span   v-for="(title, i) in TitleBiColor(dato.item.title)" :key="i" 
                                                                                v-bind:class="title.class"
                                                                                v-text="title.text+' '">
                                            </span>
                                                            
                                        </h2>
                                        <br>
                                        <h4 class="text-dp" v-text="dato.item.description"></h4>

                                         <h4 class="pre-formatted text-left" v-for="detail in dato.detail" :key="detail.id">
                                            <span v-text="detail.description"></span> 
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div v-else-if="dato.item.element == 'div-group-img'"  v-bind:id="'section'+index" class="card-body bg-dp-white">

                        <div class="container">
                            <h1 class="text-center text-dp" v-text="dato.item.title"></h1>
                            <!--<h3 class="text-left" v-text="dato.item.description"></h3>-->
                        </div>
                        <br>
                        <div class="container">
                            <div class="row  text-center magin-image-div-group" v-for="detail in dato.detail" :key="detail.id">
                                <div class="col-sm-7 fade text-left magin-image-div-group"  v-if="detail.image !== null">
                                    <img class="img-div-group float-left" border="0" v-bind:src="detail.image" alt="DedicatedPeople">
                                </div>
                                <div class="col-sm-5 fade magin-image-div-group">
                                   <h3 class="text-left text-dp-yellow magin-title-div-group"  v-text="detail.name"></h3>
                                    <h5 class="text-left" v-text="detail.description"></h5>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                   <div v-else-if="dato.item.element == 'div-group'" v-bind:id="'section'+index" class="card-body bg-dp-white">

                        <div class="col-sm-12">
                            <h1 class="text-center text-dp" v-text='dato.item.title'></h1>
                            <h3 class="text-left" v-text="dato.item.description"></h3>
                            <br>
                        </div>
                        <div class="container">
                            <div class="col-sm-10 mx-auto d-block">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-4" v-for="detail in dato.detail" :key="detail.id">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-12 text-center">
                                                        <div class="card-dp-gray"  v-if="detail.image !== null" @click="toggleItems(detail)">
                                                            <img class="max-icon mx-auto d-block" v-bind:src="detail.image" alt="DedicatedPeople">
                                                            <br>
                                                        </div>
                                                        <br>
                                                    </div>
                                                     <h3 class="text-left text-dp" v-text="detail.name"></h3>
                                            
                                                    <div v-bind:id="'panel'+detail.id" class="col-sm-12 text-left" style="display:none">
                                                        <div class="container">
                                                            <br>
                                                            <h5 class="text-left" v-text="detail.description"></h5>
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
                    </div>  
                    <div  v-if="dato.item.element == 'div-yellow/2'" v-bind:id="'section'+index" class="container-yellow col-sm-12">
                        <img class="img-yellow" v-bind:src="dato.item.image" alt="DedicatedPeople">
                        <div class="centered">
                            <br>
                            <h1 class="text-dp fade" v-text="dato.item.title.toUpperCase()"></h1>
                            <h5 v-text="dato.item.description"></h5>
                            <br>
                        </div>
                    </div>
                     <div v-else-if="dato.item.element == 'div-yellow'" v-bind:id="'section'+index" class="card-body bg-dp-img">

                        <div class="col-sm-12 head-group-rounded">
                            <h1 class="text-center text-dp-yellow" v-text='dato.item.title'></h1>
                            <br>
                        </div>
                        <div class="col-sm-12">
                    
                            <div class="row">

                                                    <div  class="col-sm-9 text-center mx-auto d-block" >
                                                        <div class="row">
                                                            <div class="col-sm-4" v-for="(detail, i) in dato.detail" :key="i" v-show='i <= 2'>
                                                                     <img v-if="detail.image !== null" class="img-fluid mx-auto d-block" v-bind:src="detail.image" alt="DedicatedPeople">
                                                                    <br>
                                                                    <h3 class="text-center text-dp-bluewhite" v-text="detail.name"></h3>
                                                                    <h4 class="text-center text-dp-yellow" v-text="detail.description"></h4>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-12 text-center" >    
                                                        <div class="row">
                                                            <div class="col-sm-3" v-for="(detail, j) in dato.detail" :key="j" v-show='j > 2'>
                                                                     <img v-if="detail.image !== null" class="img-fluid mx-auto d-block" v-bind:src="detail.image" alt="DedicatedPeople">
                                                                    <br>
                                                                    <h3 class="text-center text-dp-bluewhite" v-text="detail.name"></h3>
                                                                    <h4 class="text-center text-dp-yellow" v-text="detail.description"></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                            </div>
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
         toggleItems(data){
            $('#panel'+data.id).slideToggle();
        },
        },
        mounted() {
            console.log('Component mounted.')
             this.ListUsers();
        }    
    }
</script>
