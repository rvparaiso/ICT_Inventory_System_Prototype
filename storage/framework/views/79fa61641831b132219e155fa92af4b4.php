
   
<?php $__env->startSection('content'); ?>

    
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet" />

    </div>
    </nav>
    <br>

    

  <div class="card-body">
  <form action="#" method="POST" enctype="multipart/form-data" class="mt-2">
                <?php echo csrf_field(); ?>
       
                <!-- <input class="typeahead form-control" id="search" type="text" placeholder="Search..."> -->
                <!-- <div class="mb-3 mt-3">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div> -->
             
            </form>
          
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
        
  
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="<?php echo e(route('products.create')); ?>"> <i class="fa fa-plus"></i> Add New Product</a>
        </div>
        
        <div class="card-body">
        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th width="80px">Item #</th> 
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th width="250px">Action</th>
                </tr>
            </thead>
  
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e(++$i); ?></td>
                    <td><?php echo e($product->category); ?></td>
                    <td><?php echo e($product->brand); ?></td>
                    <td><?php echo e($product->name); ?></td>
                    <td><?php echo e($product->detail); ?></td>
                    <td>
                        
                        <form action="<?php echo e(route('products.destroy',$product->id)); ?>" method="POST">
                            <a class="btn btn-info btn-sm" href="<?php echo e(route('products.show',$product->id)); ?>"><i class="fa-solid fa-list"></i> View</a>
                            <a class="btn btn-primary btn-sm" href="<?php echo e(route('products.edit',$product->id)); ?>"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
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

        
        
        <?php echo $products->links(); ?>

  
  </div>
</div> 

<!-- <script type="text/javascript">
      
    var path = "<?php echo e(route('autocomplete')); ?>";
    
    $('#search').typeahead({
        source: function (query, process) {
            return $.get(path, {
                query: query
            }, function (data) {
                return process(data);
            });
        }
    });
    
</script> -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ICT_Inventory_System_Prototype\resources\views/products/index.blade.php ENDPATH**/ ?>