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
    <title>Dedicated People - Staffing agency</title>
    
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
    @include('website.items.navbar')
    <!-- end of navbar -->
    <!-- end of navigation -->
    <div id ="spinner2" class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- header -->
    @include('website.items.header')
    <!-- end of header -->
    <!-- content -->
 
    @include('website.items.sitecontent')
    <!-- end of content -->
     <!--contact-->
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
   <script src="{{ asset('js/sweetalert2.js') }}" defer></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.2.2/web-animations.min.js"></script>
   <script> new WOW().init(); </script>
   <script>
        
    </script>
</body>
</html>