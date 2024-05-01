<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    <link rel="icon" href="image/logo.png" type="image/x-icon"/>
    <link rel="stylesheet" href="resources/css/app.css">
    
</head>
<body>
<header>
    

    <?php $__env->startSection('content'); ?>
 
</header>
<div style="padding: 30px"></div>
<section>
  <section style="background-color: #f7f7f7;">
    <div class="text-center container py-5">
      <h4 class="mt-4 mb-5"><strong>Product</strong></h4>
  
      <div class="row">
          <?php $__currentLoopData = $viewproduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-3 col-md-10 mb-4">
          <div class="card">
            <div class="bg-image hover-zoom">
              <a href="<?php echo e(route('productview', ['id' => $item->id])); ?>" class="text-reset text-decoration-none">
              <img src="<?php echo e(asset('image/'.$item->image)); ?>" class="w-100" style="float: left;
              width:  100px;
              height: 300px;
              object-fit: cover;"/>
            </div>
            <div class="card-body">
              
                <h5 class="card-title mb-3 text-truncate" ><?php echo e($item->name); ?></h5>
              </a>
              <p class="text-truncate"><?php echo e($item->details); ?></p>
              <h6 class="mb-3">
                <strong class="ms-2 text-danger">₹ <?php echo e($item->price); ?></strong>
              </h6>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        
        </div>
    
    </div>
  </section>
</section>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>  

</body>
</html>
<?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\example-app\resources\views/product.blade.php ENDPATH**/ ?>