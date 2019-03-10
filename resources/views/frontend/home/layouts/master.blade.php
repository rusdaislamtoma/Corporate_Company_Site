<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from rockstheme.com/rocks/preview-mentos/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Mar 2019 05:22:36 GMT -->
<head>
   @include('frontend.home.layouts._head')
</head>
<body>

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div id="preloader"></div>
<header class="header-one">
      @include('frontend.home.layouts._header')
</header>
<!-- header end -->
      @yield('contents')
<!-- Start Footer bottom Area -->
<footer class="footer-1">
    @include('frontend.home.layouts._footer')
</footer>

 @include('frontend.home.layouts._scripts')
 @yield('scripts')
</body>

<!-- Mirrored from rockstheme.com/rocks/preview-mentos/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Mar 2019 05:24:03 GMT -->
</html>
