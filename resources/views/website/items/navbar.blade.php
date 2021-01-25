<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top col-sm-12">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->
     
              <!-- Image Logo -->
            <button class="navbar-brand btn btn-link logo-image col-sm text-center text-dark pag-scroll" @click="menu=0">
                <img class="text-center"style="width:200px; height:64px;" src="{{ asset('img/logoDP.png') }}" alt="DedicatedPeople">
            </button>
        
            <!-- Mobile Menu Toggle Button -->
            <button id="chevron-down" class="navbar-toggler col-sm-12 text-center up-menubar" type="button">
                <i  id="down-m" class="lni lni-menu"></i>
            </button>
            <!-- end of mobile menu toggle button -->
 

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <button class="btn btn-link text-dark  nav-link page-scroll up-menubar gotocover" @click="menu=0" ><strong>{{ __('Home') }}</strong></button>
                    </li> 
                    <li class="nav-item">
                        <button class="btn btn-link text-dark  nav-link page-scroll up-menubar gotocover" @click="menu=1" ><strong>{{ __('About us') }}</strong></button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-link text-dark nav-link page-scroll up-menubar gotocover" @click="menu=2" ><strong>{{ __('Our service') }}</strong></button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-link text-dark nav-link page-scroll up-menubar gotocover" @click="menu=3" ><strong>{{ __('Careers') }}</strong></button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-link text-dark nav-link page-scroll up-menubar gotocover" @click="menu=4" ><strong>{{ __('Testimonies') }}</strong></button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-link text-dark nav-link page-scroll up-menubar gotocover"  @click="menu=5" ><strong>{{ __('Contact us') }}</strong></button>
                    </li>
            </ul>
        </div>
        
    </nav> 