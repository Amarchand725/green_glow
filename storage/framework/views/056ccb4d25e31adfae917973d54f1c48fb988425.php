<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login Panel</title>

    <!-- Bootstrap -->
    <link href="<?php echo e(asset('public/admin')); ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo e(asset('public/admin')); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo e(asset('public/admin')); ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo e(asset('public/admin')); ?>/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo e(asset('public/admin')); ?>/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <?php echo $__env->yieldContent('content'); ?>

        <!-- jQuery -->
        <script src="<?php echo e(asset('public/admin')); ?>/vendors/jquery/dist/jquery.min.js"></script>
        <?php echo $__env->yieldPushContent('js'); ?>
    </div>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\green_glow\resources\views/admin/auth/layouts/app.blade.php ENDPATH**/ ?>