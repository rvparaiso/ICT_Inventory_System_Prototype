
  
<?php $__env->startSection('content'); ?>

<div class="card mt-5">
  <h2 class="card-header">Show Department</h2>
  <div class="card-body">
  
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="<?php echo e(route('HDepartment.index')); ?>"><i class="fa fa-arrow-left"></i> Back</a>
    </div>
  
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong> <br/>
                <?php echo e($HDepartment->name); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Details:</strong> <br/>
                <?php echo e($HDepartment->floor); ?>

            </div>
        </div>
    </div>
  
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('HDepartment.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ICT_Inventory_System_Prototype\resources\views/HDepartment/show.blade.php ENDPATH**/ ?>