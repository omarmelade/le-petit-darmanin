<?php $__env->startSection('content'); ?>

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Ajouter un auteur
  </div>

  <div class="card-body">
    <?php if($errors->any()): ?>
      <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div><br />
    <?php endif; ?>
      <form method="post" action="<?php echo e(route('authors.store')); ?>">
          <div class="form-group">
              <?php echo csrf_field(); ?>
              <label for="lastname">Nom</label>
              <input type="text" class="form-control" name="lastname"/>
          </div>
          <div class="form-group">
              <?php echo csrf_field(); ?>
              <label for="firstname">Prénom</label>
              <input type="text" class="form-control" name="firstname"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Créer un auteur</button>
      </form>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/create/author.blade.php ENDPATH**/ ?>