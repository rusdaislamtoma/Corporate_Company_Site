<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<head>
    @include('backend.admin.layouts._head')

    <!-- Page Level Stylesheets -->

</head>
<body>

<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Navbar Start -->
    <header class="navbar navbar-fixed">
        <!-- Navbar Header Start -->
        @include('backend.admin.layouts._header')
    </header>
    <!-- Navbar End -->

    <!-- Sidebar Start -->
    <aside class="sidebar" data-trigger="scrollbar">
        <!-- Sidebar Profile Start -->
         @include('backend.admin.layouts._sidebar')
        <!-- Sidebar Widgets End -->
    </aside>
    <!-- Sidebar End -->

    <!-- Main Container Start -->
    <main class="main--container">
        <!-- Page Header Start -->
        <section class="page--header">
            <div class="container-fluid">
               @include('backend.admin.layouts._contentHeader')
            </div>
        </section>
        <!-- Page Header End -->

        <!-- Main Content Start -->
        <section class="main--content">
            @include('backend.admin.layouts._messages')
            @yield('contentBody')
        </section>
        <!-- Main Content End -->

        <!-- Main Footer Start -->
        <footer class="main--footer main--footer-light">

            @include('backend.admin.layouts._footer')
        </footer>
        <!-- Main Footer End -->
    </main>
    <!-- Main Container End -->
</div>
<!-- Wrapper End -->

<!-- Scripts -->

@include('backend.admin.layouts._scripts')
@yield('scripts')

<!-- Page Level Scripts -->

</body>
</html>

