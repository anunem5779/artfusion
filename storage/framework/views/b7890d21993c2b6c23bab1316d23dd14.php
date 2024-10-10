

<?php $__env->startSection('content'); ?>
    <center><h3>Auctions</h3></center>
    <div class="row">
        <?php $__currentLoopData = $auctions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($auction->title); ?></h5>
                        <p class="card-text">Current Bid: $<?php echo e($auction->current_bid); ?></p>
                        <p class="card-text">End Time: <?php echo e($auction->end_time); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Sinister\Downloads\SSP Submission\SSP Submission\artfusion\artfusion\resources\views\auction\index.blade.php ENDPATH**/ ?>