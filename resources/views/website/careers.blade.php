<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- SEO Meta Tags -->
  <meta name="description"
    content="Every day thousands of customers and patients call these businesses either to schedule an appointment, discuss billing or handle any other urgent (or not so urgent) matter. So what happens to these calls when their offices aren't available (lunch time, closing hours, meetings)? Well we take care of them! As an answering service representative, you will receive these calls and either take a message or assist the callers by following specific procedures and prompts that you will learn during training.">
  <meta name="author" content="Dedicated People">

  <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
  <meta property="og:site_name" content="" /> <!-- website name -->
  <meta property="og:site" content="" /> <!-- website link -->
  <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
  <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
  <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
  <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
  <meta property="og:type" content="article" />

  <!-- Website Title -->
  <title>Dedicated People</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/all.css') }}" rel="stylesheet">
  <link href="{{ asset('css/careers.css') }}" rel="stylesheet">
  <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
  <!-- Favicon  -->
  <link rel="icon" href="images/favicon.png">

</head>

<body data-spy="scroll" data-target=".fixed-top">

  <!-- Preloader -->
  <div class="spinner-wrapper">
    <div class="spinner">
      <div class="bounce1"></div>
      <div class="bounce2"></div>
      <div class="bounce3"></div>
    </div>
  </div>
  <!-- end of preloader -->
  <div id="app" class="col-12 text-center">
    <img src="{{ asset('img/whiteLogo.png') }}" class="mx-auto d-block image-white">
    <br>
    <p class="text-white" >Please, select the locations of where you’re applying for</p>
    <div class="col-sm-3 mx-auto d-block">
      <a style="background-color:#101010 ; text-decoration: none; font-size:large;" href="/careers/mx"
        class="btn btn-dark btn-block" rel="noopener noreferrer">México</a>
      <a style="background-color:#101010 ; text-decoration: none; font-size:large;" href="/careers/bz"
        class="btn btn-dark btn-block" rel="noopener noreferrer">Belize</a>
    </div>
  </div>

  <!-- end of copyright -->
  <input id="url" type="hidden" value="{{ \Request::url() }}">
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/all.js') }}" defer></script>
  <script src="{{ asset('js/sweetalert2.js') }}" defer></script>

</body>

</html>