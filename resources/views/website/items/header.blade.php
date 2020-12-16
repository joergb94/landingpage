<header id="header" class="">
        <div class="header-content">
        <img style="width:100%; height:90vh;" src="{{ asset('img/Cover.png') }}" alt="Chania">
        <div class="card-header head-dp col-sm-12 text-center" style="height:10vh;">
                <template v-if="menu==0">
                    <h1 style="display:none" class="text-center text-white title-head"> Welcome </h1>
                </template>
                <template v-if="menu==1">
                        <h1 style="display:none" class="text-center text-white title-head"> About Us</h1>
                </template>
                <template v-if="menu==2">
                        <h1 class="text-center text-white title-head"> Our Service</h1>
                </template>
                <template v-if="menu==3">
                        <h1 style="display:none" class="text-center text-white title-head">Careers</h1>
                </template>
                <template v-if="menu==4">
                        <h1 style="display:none" class="text-center text-white title-head">Contact Us</h1>
                </template> 
                <br>  
        </div>       <!-- end of container -->
        </div> <!-- end of header-content -->
    </header>
    <br>