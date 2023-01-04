
<div id="contact" class="col-sm-12 bg-contact-white">
    <br><br>
    <div class="container" v-if="menu != 3" >
        <div class="row">
            <div class="col-sm-7 text-left">
            <h2>Find out how a partnership with us will benefit you today!</h2>
            <br>     
            <h4>Please fill out the next form and one of our representatives will contact you.</h4>
            </div>
            <div class="col-sm-5">
                <img class="image-conten no-margin-bottom" src="{{ asset('img/circles.png') }}" alt="Dedicated People"> 
            </div>
        </div>
    </div>
    <div class="container" v-if="menu == 3" >
        <div class="row">
            <div class="col-sm-7 text-left">
            <h2>Join our team!</h2>
            <br>       
                <h4>This is an excellent opportunity for you, click now and complete the test!</h4>
                <div class="col-sm-12 text-right">
                    
                <br>
                    <a class="btn btn-link" href="https://www.jotform.com/form/212214981658864" target="_blank" rel="noopener noreferrer"> <h4 class="text-dp">Go to test >></h4></a>
				</div>
            </div>
            <div class="col-sm-5">
                <img class="image-conten no-margin-bottom" src="{{ asset('img/circles.png') }}" alt="Dedicated People"> 
            </div>
        </div>
    </div>
    <div class="container" v-else>
        <div class="row text-center">  
             <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                 <br>
                    <iframe id="contact-frame" style="overflow-x: hidden;" src="https://docs.google.com/forms/d/e/1FAIpQLSftVIehd2uKeYe5eYNAUGo5jGU3Y8OiTYN6xUP0_WUVtx_XKQ/viewform?embedded=true" width="100%" height="1350" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
             </div>
             <div class="col-sm-7 d-none d-sm-none d-md-none d-lg-block">
            
                <iframe class="map-frame " src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3724.7984209960796!2d-89.604403!3d21.000716!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5676caf8556c7f%3A0xaf1b2c05730b21fd!2sCalle%2020%20212A%2C%20Col.%20M%C3%A9xico%2C%20M%C3%A9xico%20Oriente%2C%2097137%20M%C3%A9rida%2C%20Yuc.!5e0!3m2!1ses!2smx!4v1612898970272!5m2!1ses!2smx" width="100%" height="60%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
             </div> 
         </div> <!-- end of col -->
    </div>
</div>