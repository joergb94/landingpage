<header id="header" class="">
        <div class="header-content">
        <img style="width:100%; height:90vh;" src="{{ asset('img/Cover.png') }}" alt="Chania">
       
                        <div v-if="menu==1" class="card-header head-dp col-sm-12 text-center" style="height:10vh;">
                                <h1 style="display:none" class="text-center text-white title-head"> About Us</h1>
                        </div>  
                        <div v-if="menu==2" class="card-header head-dp col-sm-12 text-center" style="height:10vh;">
                                <h1 class="text-center text-white title-head"> Our Service</h1>
                        </div>  
                
                        <div v-if="menu==3" class="card-header head-dp col-sm-12 text-center" style="height:10vh;">
                                <h1 style="display:none" class="text-center text-white title-head">Careers</h1>
                        </div>         
      
                        <div v-if="menu==4" class="card-header head-dp col-sm-12 text-center" style="height:10vh;">
                                <h1 style="display:none" class="text-center text-white title-head">Contact Us</h1>
                        </div>
          
        </div> <!-- end of header-content -->
    </header>