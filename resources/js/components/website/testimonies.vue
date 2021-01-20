<template>
            <div class="carousel">
                <div class="" v-for="(dato, index) in dataUser" :key="index">
                    <div v-if="dato.item.element == 'slide'"  v-bind:id="'section'+index" class="carousel slide" data-ride="carousel">

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
            
             this.ListUsers();
        }    
    }
</script>
