<!doctype html>
<html lang="en">

<head>
   @include('layouts.head')
</head>

<body class="theme-blue">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{asset('assets/images/loader.gif')}}" width="48" height="48" alt="Lucid"></div>
        <p>Please wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->

<div id="wrapper">

   @include('layouts.nav')
   @include('layouts.sidebar')


   @yield('content')



</div>

</body>
  @include('layouts.footer')
</html>
