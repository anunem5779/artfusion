<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <title>Artworks</title>
</head>
<body>
    <header>
        <h1>New Releases</h1>
        <div class="artworks">
            <?php $__currentLoopData = $artworks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artwork): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="art-item">
                    <img src="<?php echo e(asset('images/' . $artwork->image)); ?>" alt="<?php echo e($artwork->name); ?>">
                    <p><?php echo e($artwork->name); ?></p>
                    <p>by <?php echo e($artwork->artist->name); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <h1>Artists</h1>
        <div class="artists">
            <?php $__currentLoopData = $artists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="artist-item">
                    <p><?php echo e($artist->name); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </header>

    <footer>
        <div class="footer-container">
            <p>Use cases</p>
            <p>Explore</p>
            <p>Resources</p>
        </div>
    </footer>
</body>
</html>
<?php /**PATH C:\Users\Sinister\Downloads\SSP Submission\SSP Submission\artfusion\artfusion\resources\views\art\index.blade.php ENDPATH**/ ?>