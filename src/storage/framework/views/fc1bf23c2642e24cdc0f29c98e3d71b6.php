<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <title><?php echo e(config('app.name')); ?></title>
    </head>

    <body>
        <div class="d-flex flex-column justify-content-between min-vh-100">

            <?php echo $__env->make('main.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <main class="main flex-grow-1">
                <?php echo $__env->yieldContent('main'); ?>
            </main>

            <?php echo $__env->make('main.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </body>

</html>
<?php /**PATH /var/www/laravel/resources/views/main/index.blade.php ENDPATH**/ ?>