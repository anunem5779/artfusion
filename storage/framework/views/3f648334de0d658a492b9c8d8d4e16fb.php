

<?php $__env->startSection('content'); ?>
    <h1>Search Results</h1>
    <?php if($results->isEmpty()): ?>
        <p>No results found</p>
    <?php else: ?>
        <ul>
            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($result->title); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Sinister\Downloads\SSP Submission\SSP Submission\artfusion\artfusion\resources\views\search\results.blade.php ENDPATH**/ ?>