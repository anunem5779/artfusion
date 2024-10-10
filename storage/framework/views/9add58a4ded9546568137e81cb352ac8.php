

<?php $__env->startSection('content'); ?>
    <div class="container mx-auto p-4">
        <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
            <div class="mb-4">
                <a href="<?php echo e(route('home')); ?>" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">
                    <
                </a>
            </div>
            <h2 class="text-2xl font-bold text-center mb-6">Gallery</h2>

            <div class="space-y-6">
                <?php $__empty_1 = true; $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="bg-white rounded-lg shadow-md p-4 flex items-center">
                        <!-- Product Image -->
                        <div class="w-1/4 flex justify-center overflow-clip">
                            <img src="<?php echo e(strpos($pro->image, 'storage') === null ? url($pro->image) : asset($pro->image)); ?>" alt="IMG" class="max-w-[10em] rounded-lg object-cover">
                        </div>

                        <!-- Product Details -->
                        <div class="w-1/2 px-4">
                            <h3 class="text-xl font-semibold"><?php echo e($pro->pro_name); ?></h3>
                            <p class="text-gray-600 mt-2"><?php echo e($pro->description); ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p class="text-center text-gray-500">No products available.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Sinister\Downloads\SSP Submission\SSP Submission\artfusion\artfusion\resources\views/home.blade.php ENDPATH**/ ?>