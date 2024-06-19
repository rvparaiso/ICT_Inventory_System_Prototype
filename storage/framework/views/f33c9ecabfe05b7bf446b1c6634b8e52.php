

<?php $__env->startSection('content'); ?>



<style>

.blink_me {
  animation: blinker 1s linear infinite;
  color: green;
}

@keyframes blinker {
  50% {
    opacity: 0;
  }
  
}

</style>
<br>
<a class="navbar-brand <?php echo e((request()->is('products.index')) ? 'active' : ''); ?>" href="<?php echo e(route('products.index')); ?>">Products</a>
<a class="navbar-brand <?php echo e((request()->is('h_department.index')) ? 'active' : ''); ?>" href="<?php echo e(route('h_department.index')); ?>">Department</a>
<br>
<!-- <div class="row justify-content-right mt-8">
    <div class="col-md-4">
        <div class="card">
           

            <div class="card-header"></div>
          
            <div class="card-body">
                <?php if($message = Session::get('success')): ?>
                    <div class="alert alert-success"><?php echo e($message); ?> </div>
                <?php else: ?>
                    
                        <div class="blink_me">Successfully logged in!</div>     
                <?php endif; ?>                
            </div>
        </div>
    </div>    
</div> -->


    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ICT_Inventory_System_Prototype\ict-inventory-system\resources\views/auth/dashboard.blade.php ENDPATH**/ ?>