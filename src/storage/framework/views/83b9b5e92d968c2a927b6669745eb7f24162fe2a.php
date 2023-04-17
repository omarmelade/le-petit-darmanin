<?php $__env->startSection('content'); ?>
    <div>
        <h2>Description</h2>
        <hr>
        <p>Le Petit Darmanin est un projet qui tend à réunir toutes les phrases <i>choc</i> du gouvernement.<br>
            L'idée m'est venue lorsque j'ai entendu Yael Gauze dire « Il faudrait que quelqu'un fasse un dictionnaire Darmanin ».<br>
            Etant donnée qu'il créait des mots à chaque nouvelle prise de parole, j'ai décidé de créer ce <b>modeste</b> dictionnaire.
        </p>
    </div>
    <br>
    <div>
        <h2>Définitions</h2>
        <hr>
        <div class="cards">
            <?php $__currentLoopData = $definitions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $definition): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card-def">
                    <p class="word"><?php echo e($definition->word); ?></p>
                    <p><?php echo e($definition->definition); ?></p>
                    <p class="author"><?php echo e($authors->firstWhere('id', $definition->author_id)->firstname); ?>

                        <?php echo e($authors->firstWhere('id', $definition->author_id)->lastname); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/index.blade.php ENDPATH**/ ?>