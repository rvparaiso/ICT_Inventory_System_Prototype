
   
<?php $__env->startSection('content'); ?>
<div class="container">
<div class="card mt-5">
  <h2 class="card-header">Department</h2>
</div>
</div>
<br>
<div class="container">
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <br>
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
  
        <div class="p-2 bd-highlight"></div>
            <a class="btn btn-success btn-sm" href="<?php echo e(route('HDepartment.create')); ?>"> <i class="fa fa-plus"></i> Add New Department</a>
        </div>
  
        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th width="80px">No</th>
                    <th>Name</th>
                    <th>Floor</th>
                    <th width="250px">Action</th>
                </tr>
            </thead>
  
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $h_department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h_department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e(++$i); ?></td>
                    <td><?php echo e($h_department->name); ?></td>
                    <td><?php echo e($h_department->floor); ?></td>
                    <td>
                        <form action="<?php echo e(route('HDepartment.destroy',$h_department->id)); ?>" method="POST">
             
                            <a class="btn btn-info btn-sm" href="<?php echo e(route('HDepartment.show',$h_department->id)); ?>"><i class="fa-solid fa-list"></i> Show</a>
                            <a class="btn btn-primary btn-sm" href="<?php echo e(route('HDepartment.edit',$h_department->id)); ?>"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
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
        
        <?php echo $h_department->links(); ?>

  
  </div>
  </div>  
 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ICT_Inventory_System_Prototype\resources\views/HDepartment/index.blade.php ENDPATH**/ ?>