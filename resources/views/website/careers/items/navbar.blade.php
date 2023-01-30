      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top col-sm-12">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->
     
              <!-- Image Logo -->
            <button class="navbar-brand btn btn-link logo-image col-sm text-center text-dark pag-scroll" @click="menu=0">
                <figure class="navimage text-center" >
                    <img class="navimage2 mx-auto d-block" src="{{ asset('img/logoDP.png') }}" alt="DedicatedPeople">
                </figure>
            </button>
        
            <!-- Mobile Menu Toggle Button -->
            <button id="chevron-down" class="navbar-toggler col-sm-12 text-center up-menubar" type="button">
                <i  id="down-m" class="lni lni-menu"></i>
            </button>
            <!-- end of mobile menu toggle button -->
 

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="btn btn-link text-dark  nav-link page-scroll up-menubar gotocover" href="/" ><strong>{{ __('Home') }}</strong></a>
                    </li> 
            </ul>
        </div>
        
    </nav>