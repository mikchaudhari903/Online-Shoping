<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                
                <div class="card">
                    <div class="card-header">
                        <h4>Update Product <a href="<?php echo e(route('view.index')); ?>" class="btn btn-primary float-end">Back</a></h4>
                    </div>
                    <div class="card-body">
                        <?php if(session('status')): ?>
                        <div class="alert alert-success alert-block">  
                             
                                <strong><?php echo e(session('status')); ?></strong>  
                        </div>  
                        <?php endif; ?>  
                        <form action="<?php echo e(route('update', ['id' => $viewproduct->id])); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
    
                            <div class="mb-3">
                             
                                <input type="text" name="name" required value="<?php echo e($viewproduct->name); ?>" class="form-control" placeholder="Name">
                            </div>
                            <div class="mb-3">
                              
                                <textarea class="form-control" id="form6Example7" name="details"  rows="4" placeholder="Details"><?php echo e($viewproduct->details); ?></textarea>
                            </div>
                            <div class="mb-3">
                                <input type="number" name="price" value="<?php echo e($viewproduct->price); ?>" required class="form-control" placeholder="Price">
                            </div>
                            <div class="mb-3">
                                <label for="">Upload Image</label>
                                <input type="file" name="image" required class="course form-control" value="<?php echo e($viewproduct->image); ?>">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                           
                            
                        </form>
    
                    </div>
                </div>
    
            </div>
        </div>
    </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
 
</body>
</html><?php /**PATH G:\example-app\resources\views/edit.blade.php ENDPATH**/ ?>