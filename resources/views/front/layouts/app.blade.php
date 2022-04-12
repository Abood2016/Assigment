<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.layouts.header-meta')
</head>

<body id="page-top">
    <!-- Navigation-->
    @include('front.layouts.nav-bar')
    <!-- Masthead-->
    @include('front.layouts.header')

    <!-- Portfolio Section-->
        @yield('content')


    <!-- About Section-->
  
    <!-- Contact Section-->

    <!-- Footer-->
    @include('front.layouts.footer')
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright © Your Website 2020</small></div>
    </div>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
    <div class="scroll-to-top d-lg-none position-fixed">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i
                class="fa fa-chevron-up"></i></a>
    </div>

  
    @include('admin.layouts.footer-meta')
</body>

</html>