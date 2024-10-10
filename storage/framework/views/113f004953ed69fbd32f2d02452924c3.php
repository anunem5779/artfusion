

<?php $__env->startSection('content'); ?>
<div class="container mx-auto p-4">
    <div class="flex justify-center">
        <div class="w-full md:w-6/12 bg-[#fef5e7] shadow-md rounded-lg overflow-hidden border border-gray-300">
            <div class="bg-[#fef5e7] p-6">
                <h2 class="text-3xl font-bold text-center mb-6">Edit Product</h2>
                <form action="<?php echo e(url('pictures/update/'.$product->id)); ?>" method="post" enctype="multipart/form-data" class="grid gap-4">
                    <?php echo csrf_field(); ?>

                    <!-- Category Field -->
                    <div class="grid gap-2">
                        <label for="category" class="text-lg">Category</label>
                        <input type="text" name="category" id="category" class="border border-gray-400 px-4 py-2 w-full rounded-md" value="<?php echo e($product->artist); ?>">
                    </div>

                    <!-- Product Name Field -->
                    <div class="grid gap-2">
                        <label for="Product_Name" class="text-lg">Product Name</label>
                        <input type="text" name="Product_Name" id="Product_Name" value="<?php echo e($product->name); ?>" class="border border-gray-400 px-4 py-2 w-full rounded-md">
                    </div>

                    <!-- Price Field -->
                    <div class="grid gap-2">
                        <label for="product_price" class="text-lg">Price</label>
                        <input type="number" name="product_price" id="product_price" value="<?php echo e($product->price); ?>" class="border border-gray-400 px-4 py-2 w-full rounded-md">
                    </div>

                    <!-- Description Field -->
                    <div class="grid gap-2">
                        <label for="description" class="text-lg">Description</label>
                        <textarea name="description" id="description" rows="5" class="border border-gray-400 px-4 py-2 w-full rounded-md"><?php echo e($product->description); ?></textarea>
                    </div>

                    <!-- Image Upload -->
                    <div class="grid gap-2">
                        <label for="product_image" class="text-lg">Images</label>
                        <input type="file" name="product_image" id="product_image" class="border border-gray-400 px-4 py-2 w-full rounded-md">
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-center mt-4">
                        <input type="submit" value="Save" class="bg-black text-white px-6 py-2 rounded-md hover:bg-gray-700 transition">
                    </div>
                </form>

                <!-- Image Preview -->
                <div class="flex justify-center mt-4">
                    <img src="<?php echo e(strpos($product->image, 'storage') === null ? url($pro->image) : asset($product->image)); ?>" alt="Product Image" class="h-[10em] rounded-md">
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Sinister\Downloads\SSP Submission\SSP Submission\artfusion\artfusion\resources\views\Pictures_Folder\edit.blade.php ENDPATH**/ ?>