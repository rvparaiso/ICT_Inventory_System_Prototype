  
   
<?php $__env->startSection('content'); ?>

<style>

.table-responsive-stack tr {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
}


.table-responsive-stack td,
.table-responsive-stack th {
   display:block;
/*      
   flex-grow | flex-shrink | flex-basis   */
   -ms-flex: 1 1 auto;
    flex: 1 1 auto;
}

.table-responsive-stack .table-responsive-stack-thead {
   font-weight: bold;
}

@media screen and (max-width: 768px) {
   .table-responsive-stack tr {
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
          -ms-flex-direction: column;
              flex-direction: column;
      border-bottom: 3px solid #ccc;
      display:block;
      
   }
   /*  IE9 FIX   */
   .table-responsive-stack td {
      float: left\9;
      width:100%;
   }
}



</style>
<div class="container">
<div class="card" style="width: 15rem;">
  <h2 class="card-header">ICT Devices</h2>
</div>
</div>
<br>
<div class="container">        
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <?php $__sessionArgs = ['success'];
if (session()->has($__sessionArgs[0])) :
if (isset($value)) { $__sessionPrevious[] = $value; }
$value = session()->get($__sessionArgs[0]); ?>
            <div class="alert alert-success" role="alert"> <?php echo e($value); ?> </div>
        <?php unset($value);
if (isset($__sessionPrevious) && !empty($__sessionPrevious)) { $value = array_pop($__sessionPrevious); }
if (isset($__sessionPrevious) && empty($__sessionPrevious)) { unset($__sessionPrevious); }
endif;
unset($__sessionArgs); ?>
  
        
            <a class="btn btn-success btn-sm" href="<?php echo e(route('Ict.create')); ?>"> <i class="fa fa-plus"></i> Add New Ict Devices</a>
        </div>
  
        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th width="30px">No.</th>
                    <th scope="col">Department ID</th>
                    <th>Ict Category ID:</th>
                    <th>Status ID:</th>
                    <th>IP Config ID:</th>
                    <th>End User:</th>
                    <th>Property No.:</th>
                    <th>Ict Code:</th>
                    <th>Brand:</th>
                    <th>Model:</th>
                    <th>Serial No.:</th>
                    <th>Address:</th>
                    <th>Floor:</th>
                    <th>Manufactured Date:</th>
                    <th width="250px">Action</th>
                </tr>
            </thead>
  
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $ict_devices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ict_devices): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td  data-label><?php echo e(++$i); ?></td>
                    <td><?php echo e($ict_devices->department_id); ?></td>
                    <td><?php echo e($ict_devices->ict_category_id); ?></td>
                    <td><?php echo e($ict_devices->status_id); ?></td>
                    <td><?php echo e($ict_devices->ip_config_id); ?></td>
                    <td><?php echo e($ict_devices->end_user); ?></td>
                    <td><?php echo e($ict_devices->property_no); ?></td>
                    <td><?php echo e($ict_devices->ict_code); ?></td>
                    <td><?php echo e($ict_devices->brand); ?></td>
                    <td><?php echo e($ict_devices->model); ?></td>
                    <td><?php echo e($ict_devices->serial_no); ?></td>
                    <td><?php echo e($ict_devices->address); ?></td>
                    <td><?php echo e($ict_devices->floor); ?></td>
                    <td><?php echo e($ict_devices->manufactured_date); ?></td>
                    <td>
                    <form action="<?php echo e(route('Ict.destroy',$ict_devices->id)); ?>" method="POST">
               
                            <a class="btn btn-info btn-sm" href="<?php echo e(route('Ict.show',$ict_devices->id)); ?>"><i class="fa fa-eye"></i> Show</a>
                            <a class="btn btn-primary btn-sm" href="<?php echo e(route('Ict.edit',$ict_devices->id)); ?>"><i class="fa fa-edit"></i> Edit</a>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="4">There are no data.</td>
                </tr>
            <?php endif; ?>
            </tbody>
  
        </table>
        
        <?php echo $ict_devices->links(); ?>

  
  </div>
</div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ICT_Inventory_System_Prototype\resources\views/Ict/index.blade.php ENDPATH**/ ?>