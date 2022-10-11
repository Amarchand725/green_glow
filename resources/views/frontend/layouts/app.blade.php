<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicons Icon -->
    <link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
    <title>Lilac premium HTML5 &amp; CSS3 template</title>
    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS Style -->
    @include('frontend/layouts/styles')

    @stack('css')
</head>
<body class="cms-index-index cms-home-page">
    <div id="page">
        <div class="top-banners">
            <div class="banner"> Populate this marketing banner to advertise a special promotion such as: <span>Save 20%</span> this weekend! </div>
        </div>
        <!-- Header -->
        @include('frontend/layouts/header')
        <!-- end header -->

        @yield('left_menu_content')

        @yield('content')

        <!-- Latest Blog -->
        @yield('blog_content')
        <!-- End Latest Blog -->

        <!-- Footer -->
        @include('frontend/layouts/footer')
        <!-- End Footer -->
    </div>

    <!-- mobile menu -->
    @include('frontend/layouts/mobile_menu')

    <!-- JavaScript -->
    @include('frontend/layouts/scripts')

    @stack('script')

    <script type='text/javascript'>
        jQuery(document).ready(function() {
            jQuery('#rev_slider_4').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 850,
                startheight: 435,
                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,
                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',
                touchenabled: 'on',
                onHoverStop: 'on',
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                spinner: 'spinner0',
                keyboardNavigation: 'off',
                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,
                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,
                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,
                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'off',
                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: 'off',
                autoHeight: 'off',
                forceFullWidth: 'on',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,
                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
    </script>
    <!-- Hot Deals Timer 1-->
    <script type="text/javascript">
        var dthen1 = new Date("12/25/17 11:59:00 PM");
        start = "08/04/15 03:02:11 AM";
        start_date = Date.parse(start);
        var dnow1 = new Date(start_date);
        if (CountStepper > 0)
        ddiff = new Date((dnow1) - (dthen1));
        else
        ddiff = new Date((dthen1) - (dnow1));
        gsecs1 = Math.floor(ddiff.valueOf() / 1000);

        var iid1 = "countbox_1";
        CountBack_slider(gsecs1, "countbox_1", 1);
    </script>
</body>

</html>
