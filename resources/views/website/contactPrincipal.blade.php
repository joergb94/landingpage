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
    <title>Dedicated People - Contact Us</title>
    
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
	 <!-- Preloader -->
     <div class="spinner-wrapper">
            <div class="col-sm-12 text-center" style="padding-top:20vh;">
                <img class="text-center" style="width:120px; height:120px;" src="{{ asset('img/logo.png') }}" alt="alternative">
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
        @if(isset($msg))
                  <div class="alert alert-success alert-dismissible">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <strong>Success!</strong> Send Message!.
                  </div>      
            @endif
     @include('website.items.contact')
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
   <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.2.2/web-animations.min.js"></script>
   <script> new WOW().init(); </script>

</body>
</html>