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
    Add User
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
      <form method="post" action="<?php echo e(route('definitions.store')); ?>">
          <div class="form-group">
              <?php echo csrf_field(); ?>
              <label for="word">Mot</label>
              <input type="text" class="form-control" name="word"/>
          </div>
          <div class="form-group">
              <label for="definition">Definition</label>
              <textarea class="form-control" name="definition" placeholder="La definition de votre mot">
              </textarea>
          </div>
          <div class="form-group">
              <label for="author_id">Auteur</label>
              <br>
              <select class="from-control" name="author_id">
                  <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($author->id); ?>"><?php echo e($author->firstname." ".$author->lastname); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Create Definition</button>
      </form>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/create/definition.blade.php ENDPATH**/ ?>