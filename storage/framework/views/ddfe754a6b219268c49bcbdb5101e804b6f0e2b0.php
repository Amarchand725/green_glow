<?php $__env->startSection('content'); ?>
    <div class="login_wrapper">
        <div class="animate form login_form">
        <section class="login_content">
            <form action="<?php echo e(route('admin.login')); ?>" method="post">
                <?php echo csrf_field(); ?>

                <h1>Login Form</h1>
                <input type="hidden" name="user_type" value="admin">
                <div>
                    <div class="field item form-group">
                        <div class="col-sm-12">
                            <input type="email" class="form-control" name="email" placeholder="Username" required="" />
                        </div>
                    </div>
                </div>
                <div>
                    <div class="field item form-group">
                        <div class="col-sm-12">
                            <input class="form-control" type="password" id="password1" name="password" title="Minimum 8 Characters Including An Upper And Lower Case Letter, A Number And A Unique Character" required />

                            <span style="position: absolute;right:15px;top:7px;" onclick="hideshow()" >
                                <i id="slash" class="fa fa-eye-slash"></i>
                                <i id="eye" class="fa fa-eye"></i>
                            </span>
                        </div>
                    </div>
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong style="color:red"><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div>
                    <div class="field item form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-info btn-sm" style="width:100%">Log in</button>
                            <a class="reset_pass" href="<?php echo e(route('admin.forgot_password')); ?>"><?php echo e(__('Lost your password?')); ?></a>
                            <span class="reset_pass">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                <?php echo e(__('Remember Me')); ?>

                            </span>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="separator">

                    <div class="clearfix"></div>
                    <br />

                    <div>
                    <h1><i class="fa fa-paw"></i> Green Glow!</h1>
                    <p>©2022 All Rights Reserved. Green Glow Privacy and Terms</p>
                    </div>
                </div>
            </form>
        </section>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script>
        function hideshow(){
            var password = document.getElementById("password1");
            var slash = document.getElementById("slash");
            var eye = document.getElementById("eye");

            if(password.type === 'password'){
                password.type = "text";
                slash.style.display = "block";
                eye.style.display = "none";
            }
            else{
                password.type = "password";
                slash.style.display = "none";
                eye.style.display = "block";
            }
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.auth.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\green_glow\resources\views/admin/auth/login.blade.php ENDPATH**/ ?>