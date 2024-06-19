
  
<?php $__env->startSection('content'); ?>

<div class="card mt-5">
  <h2 class="card-header">Show Ict Devices</h2>
  <div class="card-body">
  
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="<?php echo e(route('Ict.index')); ?>"><i class="fa fa-arrow-left"></i> Back</a>
    </div>
  
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Department ID:</strong> <br/>
                <?php echo e($Ict->department_id); ?>

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Ict Category ID:</strong> <br/>
                <?php echo e($Ict->ict_category_id); ?>

            </div>
        </div>

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status ID:</strong> <br/>
                <?php echo e($Ict->status_id); ?>

            </div>
        </div>

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ip Config ID:</strong> <br/>
                <?php echo e($Ict->ip_config_id); ?>

            </div>
        </div>

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>End User:</strong> <br/>
                <?php echo e($Ict->end_user); ?>

            </div>
        </div>

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Property #:</strong> <br/>
                <?php echo e($Ict->property_no); ?>

            </div>
        </div>

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ict Code:</strong> <br/>
                <?php echo e($Ict->ict_code); ?>

            </div>
        </div>

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Brand:</strong> <br/>
                <?php echo e($Ict->brand); ?>

            </div>
        </div>

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Model:</strong> <br/>
                <?php echo e($Ict->model); ?>

            </div>
        </div>

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Serial #:</strong> <br/>
                <?php echo e($Ict->serial_no); ?>

            </div>
        </div>

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Floor:</strong> <br/>
                <?php echo e($Ict->floor); ?>

            </div>
        </div>

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Manufactured Date:</strong> <br/>
                <?php echo e($Ict->manufactured_date); ?>

            </div>
        </div>

    </div>
  
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Ict.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ICT_Inventory_System_Prototype\resources\views/Ict/show.blade.php ENDPATH**/ ?>