<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">  
                    <li class="nav-item">
                        <button class="nav-link page-scroll" @click="menu=0" >{{ __('About us') }}</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link page-scroll" @click="menu=1" >{{ __('Our service') }}</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link page-scroll" @click="menu=2" >{{ __('Careers') }}</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link page-scroll" @click="menu=3" >{{ __('Testimonies') }}</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link page-scroll" @click="menu=4" >{{ __('Contact us') }}</button>
                    </li>
            </ul>

            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x facebook"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x twitter"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> 