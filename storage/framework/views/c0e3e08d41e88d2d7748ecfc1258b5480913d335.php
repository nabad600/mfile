<!DOCTYPE html>
<html lang="<?php echo e(\App::getLocale()); ?>" dir="<?php echo e(htmldir()); ?>">
  <head>
    <base href="<?php echo e(url('/')); ?>/" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
    <title><?php echo e(trans('app.application_title')); ?></title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset(mix('css/app-'.htmldir().'.css'))); ?>">
    <meta name="description" content="<?php echo e(trans('app.application_description')); ?>">
    <link rel="author" href="@djaiss">
    <meta property="og:title" content="<?php echo e(trans('app.application_og_title')); ?>" />
    <link rel="shortcut icon" href="img/favicon.png">
  </head>

  <?php echo $__env->yieldContent('content'); ?>

</html>
<?php /**PATH /var/www/monica/resources/views/marketing/skeleton.blade.php ENDPATH**/ ?>