<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="Le petit darmanin est un dictionnaire qui recense tous les mots et expressions parfois vagues et incompréhensibles utilisés par le ministre de l’intérieur.">
	<title>Le Petit Darmanin</title>
        <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    </head>
    <body>
        <div id="page-container">
            <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="content-wrap container">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
            <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" type="text/js"></script>
    </body>
</html>
<?php /**PATH /var/www/html/resources/views/layout.blade.php ENDPATH**/ ?>