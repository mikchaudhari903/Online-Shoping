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
<section >
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="<?php echo e(asset('image/'.$viewproduct->image)); ?>" alt="..." style="float: left;
                width:  600px;
                height: 400px;
                object-fit: contain;" /></div>
            <div class="col-md-6">
                <h4 class=" fw-bolder"><?php echo e($viewproduct->name); ?></h4>
                <div class="fs-5 mb-5">
                    <span>₹ <?php echo e($viewproduct->price); ?></span>
                </div>
                <p class="lead"><?php echo e($viewproduct->details); ?></p>
                <div class="d-flex">
                    <form action="<?php echo e(route('order')); ?>" method="post">
                     <?php echo csrf_field(); ?>
                    <input type="text" class="visually-hidden" name="user_id" value="<?php echo e($userId = Auth::id()); ?>">
                    <input type="text" class="visually-hidden" name="product_id" value="<?php echo e($viewproduct->id); ?>">
                    <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" name="qty" style="max-width: 3rem" />
                    <br>
                    <button class="btn btn-outline-dark flex-shrink-0" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Add to cart
                    </button>
                </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div style="height: 60px">

    </div>
</section>

         <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>  

</body>
</html>
<?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\example-app\resources\views/productview.blade.php ENDPATH**/ ?>