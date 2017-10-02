<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title>Metromech Ltd</title>
  <meta name="description" content="">
  <meta name="author" content="Evoke Media Ltd">

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="shortcut icon" href="images/favicon.ico">

  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Work+Sans:100,300,400,400italic,500,700,700italic'>
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Playfair+Display:100,300,400,400italic,500,700,700italic'>
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:100,300,400'>

  <link rel="stylesheet" href="{{ asset("/css/global.css") }}">
  <link rel="stylesheet" href="{{ asset("/css/structure.css") }}">
  <link rel="stylesheet" href="{{ asset("/css/productions.css") }}">
  <link rel="stylesheet" href="{{ asset("/css/custom.css") }}">

  <link rel="stylesheet" href="{{ asset("/css/dropzone/dropzone.min.css") }}">

  <link rel="stylesheet" href="{{ asset("/plugins/rs-plugin/css/settings.css") }}">
  <link rel="stylesheet" type="text/css" href="/css/sweetalert.css">
  <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
</head>
  @yield('content')

    <script src="{{ asset("/js/jquery-2.1.4.min.js") }}"></script>
    <script src="{{ asset("/js/mfn.menu.js") }}"></script>
    <script src="{{ asset("/js/jquery.plugins.js") }}"></script>
    <script src="{{ asset("/js/animations/animations.js") }}"></script>
    <script src="{{ asset("/js/translate3d.js") }}"></script>
    <script src="{{ asset("/js/scripts.js") }}"></script>
    <script src="{{ asset("/css/dropzone/dropzone.min.js") }}"></script>
    <script src="/js/sweetalert.js"></script>
    @include('Alerts::alerts')
    @include('script')
    
    <script id="mfn-dnmc-retina-js">
    jQuery(window).load(function() {
      var retina = window.devicePixelRatio > 1 ? true : false;
      if (retina) {
        var retinaEl = jQuery("#logo img.logo-main");
        var retinaLogoW = retinaEl.width();
        var retinaLogoH = retinaEl.height();
        retinaEl.attr("src", "images/retina-productions.png").width(retinaLogoW).height(retinaLogoH);
        var stickyEl = jQuery("#logo img.logo-sticky");
        var stickyLogoW = stickyEl.width();
        var stickyLogoH = stickyEl.height();
        stickyEl.attr("src", "images/retina-productions.png").width(stickyLogoW).height(stickyLogoH);
        var mobileEl = jQuery("#logo img.logo-mobile");
        var mobileLogoW = mobileEl.width();
        var mobileLogoH = mobileEl.height();
        mobileEl.attr("src", "images/retina-productions.png").width(mobileLogoW).height(mobileLogoH);
        var mobileStickyEl = jQuery("#logo img.logo-mobile-sticky");
        var mobileStickyLogoW = mobileStickyEl.width();
        var mobileStickyLogoH = mobileStickyEl.height();
        mobileStickyEl.attr("src", "images/retina-productions.png").width(mobileStickyLogoW).height(mobileStickyLogoH);
      }
    });
  </script>
</html>