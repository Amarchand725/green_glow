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
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend')); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend')); ?>/css/font-awesome.min.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend')); ?>/css/simple-line-icons.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend')); ?>/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend')); ?>/css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend')); ?>/css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend')); ?>/css/jquery.mobile-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend')); ?>/css/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/frontend')); ?>/css/revslider.css">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600,800,400' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;subset=latin-ext" rel="stylesheet">
</head>
<body class="cms-index-index cms-home-page">
    <div id="page">
        <div class="top-banners">
            <div class="banner"> Populate this marketing banner to advertise a special promotion such as: <span>Save 20%</span> this weekend! </div>
        </div>
        <!-- Header -->
        <?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- end header -->

        <!-- Home slider -->
        <?php echo $__env->yieldContent('home-slider'); ?>
        <!-- Home slider -->

        <!-- conent -->
        <?php echo $__env->yieldContent('content'); ?>
        <!-- conent -->

        <!-- Latest Blog -->
        <?php echo $__env->yieldContent('blogs'); ?>
        <!-- End Latest Blog -->

        <!-- Footer -->
        <?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- End Footer -->
    </div>

    <!-- mobile menu -->
    <?php echo $__env->make('frontend.layouts.side_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- mobile menu -->

    <!-- JavaScript -->
    <script type="text/javascript" src="<?php echo e(asset('public/frontend')); ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/frontend')); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/frontend')); ?>/js/revslider.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/frontend')); ?>/js/common.js"></script>

    <script type="text/javascript" src="<?php echo e(asset('public/frontend')); ?>/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/frontend')); ?>/js/jquery.mobile-menu.min.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/frontend')); ?>/js/countdown.js"></script>
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
<?php /**PATH C:\xampp\htdocs\green_glow\resources\views/frontend/layouts/app.blade.php ENDPATH**/ ?>