<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Dedicated People landingpage">
    <meta name="author" content="Dedicated People">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Website Title -->
    <title>Dedicated People - Careers</title>
    
   <!-- Styles -->
    <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
	<!-- Favicon  -->
    <link rel="icon" href="{{ asset('img/logo.png') }}">
</head>
<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
	<div class="spinner-wrapper">
            <div class="col-sm-12 text-center" style="padding-top:20vh;">
                <img class="text-center"style="width:120px; height:120px;" src="{{ asset('img/logo.png') }}" alt="alternative">
                <h3>Dedicated People</h3>
            </div>
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    <div id='app'>
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
    <!-- end of navbar -->
    <!-- end of navigation -->
    <div id ="spinner2" class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <header id="header" class="">
        <br><br><br>
    </header> 
     <!--contact-->
     <br><br><br><br>
     <div class="container"  >
        <div class="row">
           
            
        </div>
    </div>
    <div class="container" >
        <div class="row text-center">  
             <div class="col-sm-8">
                 <br>
                 <iframe id="contact-frame" style="overflow-x: hidden;" allow="camera *;microphone *" src="https://www.jotform.com/form/212214981658864" width="100%" height="1800" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
             </div>
             <div class="col-sm-4 text-center">
                <img class="image-conten no-margin-bottom" src="{{ asset('img/circles.png') }}" alt="Dedicated People"> 
                <iframe class="map-frame" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3724.7984209960796!2d-89.604403!3d21.000716!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5676caf8556c7f%3A0xaf1b2c05730b21fd!2sCalle%2020%20212A%2C%20Col.%20M%C3%A9xico%2C%20M%C3%A9xico%20Oriente%2C%2097137%20M%C3%A9rida%2C%20Yuc.!5e0!3m2!1ses!2smx!4v1612898970272!5m2!1ses!2smx" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
         </div> <!-- end of col -->
    </div>
    <!--end of contact-->
    <!-- Footer -->
    @include('website.items.footer')
    <!-- end of footer -->  
    <!-- end of footer -->
    </div>
    <input id="baseUrl" type="hidden" value="{{ \Request::root() }}">
   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>
   <script src="{{ asset('js/all.js') }}" defer></script>
   <script src="{{ asset('js/sweetalert2.js') }}" defer></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.2.2/web-animations.min.js"></script>
    
   <script> new WOW().init(); </script>
    <script>
       setTimeout(function(){ Swal.fire('Please check your microphone and audio permissions'); }, 3000);
    </script>
</body>
</html>