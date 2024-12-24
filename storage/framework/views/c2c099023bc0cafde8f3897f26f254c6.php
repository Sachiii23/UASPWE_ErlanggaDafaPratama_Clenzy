<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- theme meta -->
    <meta name="theme-name" content="quixlab" />

    <title>Admin - Clenzy</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="<?php echo e(asset('admin/plugins/pg-calendar/css/pignose.calendar.min.css')); ?>" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/chartist/css/chartist.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')); ?>">
    <!-- Custom Stylesheet -->
    <link href="<?php echo e(asset('admin/css/style.css')); ?>" rel="stylesheet">

</head>

<body>
    <div id="main-wrapper">
        <?php echo $__env->make('admin.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('admin.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
</body>
<?php /**PATH C:\xampp\htdocs\applaundry\resources\views/admin/layouts/index.blade.php ENDPATH**/ ?>