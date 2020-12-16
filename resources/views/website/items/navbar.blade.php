<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top col-sm-12">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->
     
              <!-- Image Logo -->
            <button class="navbar-brand btn btn-link logo-image col-sm text-center text-dark pag-scroll" @click="menu=0">
                <img class="text-center"style="width:64px; height:64px;" src="{{ asset('img/logo.png') }}" alt="alternative">
                    Dedicated People
            </button>
        
            <!-- Mobile Menu Toggle Button -->
            <button id="chevron-down" class="navbar-toggler col-sm-12 text-center" type="button" onclick="downMenubar()">
                <i class="lni lni-menu"></i>
            </button>
            <button  id="chevron-up" class="navbar-toggler col-sm-12 text-center" type="button" onclick="upMenubar()">
                <i class="lni lni-close"></i>
            </button>
            <!-- end of mobile menu toggle button -->
 

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">  
                    <li class="nav-item">
                        <button class="btn btn-link nav-link page-scroll" @click="menu=1" >{{ __('About us') }}</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-link nav-link page-scroll" @click="menu=2" >{{ __('Our service') }}</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-link nav-link page-scroll" @click="menu=3" >{{ __('Careers') }}</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-link nav-link page-scroll" @click="menu=0" >{{ __('Testimonies') }}</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-link nav-link page-scroll"  @click="menu=4" onclick="upMenubar()" >{{ __('Contact us') }}</button>
                    </li>
                    <li class="nav-item">
                        @include('website/items/btn-social')
                    </li>
            </ul>
        </div>
    </nav> 