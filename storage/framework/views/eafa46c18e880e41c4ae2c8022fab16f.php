<form action="<?php echo e(route('art.storeArtwork')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div>
        <label for="name">Artwork Name:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="artist">Artist:</label>
        <select name="artist_id" id="artist" required>
            <?php $__currentLoopData = $artists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($artist->id); ?>"><?php echo e($artist->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div>
        <label for="image">Image:</label>
        <input type="file" id="image" name="image">
    </div>
    <button type="submit">Create Artwork</button>
</form>
<?php /**PATH C:\Users\Sinister\Downloads\SSP Submission\SSP Submission\artfusion\artfusion\resources\views\art\createArtwork.blade.php ENDPATH**/ ?>