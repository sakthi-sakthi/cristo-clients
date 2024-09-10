<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.headerscript')
</head>

<body>

    <!-- ======= Header ======= -->
    @include('partials.header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('partials.sidebar')
    <!-- End Sidebar-->

    <main id="main" class="main">

        @yield('content')

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('partials.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- ======= Footer Scripts ======= -->
    @include('partials.footerscript')
    <!-- End Footer Scripts -->


</body>

</html>