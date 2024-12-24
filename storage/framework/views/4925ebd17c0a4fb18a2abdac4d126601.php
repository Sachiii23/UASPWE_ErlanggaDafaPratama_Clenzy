<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login - Laundry</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="<?php echo e(asset('admin/css/style.css')); ?>" rel="stylesheet">

</head>

<body class="h-100">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3"
                    stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->





    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center">
                                    <h4>LOGIN</h4>
                                </a>

                                <form class="mt-5 mb-5 login-input" action="<?php echo e(route('proses.login')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="email">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <small><?php echo e($message); ?></small>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password">
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <small><?php echo e($message); ?></small>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form-group">
                                            <select class="form-control" name="status" id="val-skill">
                                                <option>-- Status --</option>                                        
                                                    <option value="admin">ADMIN</option>
                                                    <option value="pelanggan">PELANGGAN</option>                                             
                                            </select>
                                        </div>
                                    <button class="btn login-form__btn submit w-100">Sign In</button>
                                </form>
                                <p class="mt-5 login-form__footer">Dont have account? <a href="<?php echo e(route('register.user')); ?>"
                                        class="text-primary">Sign Up</a> now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--**********************************
        Scripts
    ***********************************-->
    <script src="<?php echo e(asset('admin/plugins/common/common.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/custom.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/settings.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/gleek.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/styleSwitcher.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php if($message = Session::get('succes')): ?>{
        <script>
            Swal.fire({
                title: "INFO",
                text: "<?php echo e($message); ?>",
                icon: "success"
            });
        </script>
    }
    <?php endif; ?>
    <?php if($message = Session::get('failed')): ?>{
        <script>
            Swal.fire({
                title: "INFO",
                text: "<?php echo e($message); ?>",
                icon: "error"
            });
        </script>
    }
    <?php endif; ?>

    <?php if($message = Session::get('failedL')): ?>{
        <script>
            Swal.fire({
                title: "INFO",
                text: "<?php echo e($message); ?>",
                icon: "error"
            });
        </script>
    }
    <?php endif; ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\applaundry\resources\views/login.blade.php ENDPATH**/ ?>