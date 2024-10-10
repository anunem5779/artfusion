

<?php $__env->startSection('content'); ?>

<div class="container mx-auto p-4">
    <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
        <div class="mb-4">
            <a href="<?php echo e(route('home')); ?>" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">
                <
            </a>
        </div>
        <h2 class="text-2xl font-bold text-center mb-6">Manage Products</h2>

        <a href="<?php echo e(route('gallery-create')); ?>" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">
            <button class="p-2 rounded-sm">Add</button>
        </a>

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

                    <!-- Actions (Edit and Delete) -->
                    <div class="w-1/4 flex justify-end space-x-3">
                        <a href="<?php echo e(url('pictures/edit/'.$pro->id)); ?>" class="bg-blue-600 xtext-white px-4 py-2 rounded-md hover:bg-blue-700">
                            Edit
                        </a>

                        <!-- Delete Button with Confirmation -->
                        <button type="button" onclick="confirmDelete(<?php echo e($pro->id); ?>)" class="bg-red-600 xtext-white px-4 py-2 rounded-md hover:bg-red-700">
                            Remove
                        </button>

                        <!-- Hidden delete form for the product -->
                        <form id="delete-form-<?php echo e($pro->id); ?>" action="<?php echo e(url('pictures/delete')); ?>" method="post" style="display: none;">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="pro_id" value="<?php echo e($pro->id); ?>">
                        </form>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p class="text-center text-gray-500">No products available.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- SweetAlert2 JavaScript confirmation function -->
<script>
    function confirmDelete(productId) {
        Swal.fire({
            title: 'Are you sure you want to delete this item?',
            text: "You won't be able to revert this action!",
            icon: 'Warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                // If the user confirms, submit the form to delete the product
                document.getElementById('delete-form-' + productId).submit();
            }
        });
    }
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Sinister\Downloads\SSP Submission\SSP Submission\artfusion\artfusion\resources\views/Pictures_Folder/index.blade.php ENDPATH**/ ?>