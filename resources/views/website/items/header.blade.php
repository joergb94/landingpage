
<header id="header" class="">
        <div  class="container-yellow" style="width:100%; height:90vh;" >
                        <img class="img-head-dp" src="{{ asset('img/Cover.png') }}" alt="DedicatedPeople">
                        <div class="centered-head-dp">
                            <h1 class="text-dp text-head">STAFFING 24/7 TO MEET YOUR NEEDS</h1>
                            <br>
                        </div>
                    </div> 
        <div class="header-content">    
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