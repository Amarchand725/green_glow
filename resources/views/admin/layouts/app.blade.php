<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>@yield('title')</title>

    <!-- css -->
    @include('admin.layouts.styles')
    @stack('css')
    <!-- css -->
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">


                <!-- sidebar menu && menu footer buttons -->
                @include('admin.layouts.sidebar')
                <!-- /sidebar menu && menu footer buttons -->

            </div>
        </div>

        <!-- top navigation -->
        @include('admin.layouts.header')
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        @include('admin.layouts.footer')
        <!-- /footer content -->
      </div>
    </div>

    <!-- script -->
    @include('admin.layouts.scripts')
    @stack('js')
    <!-- script -->
  </body>
</html>
