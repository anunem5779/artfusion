<?php $__env->startSection('content'); ?>
<div class="login-container">
    <div class="login-box">
        <h3><b>ARTFUSION</b></h3>
        <form method="POST" action="<?php echo e(url('/login')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="email">Username</label>
                <input type="text" name="email" id="email" class="form-control1" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control1" required>
            </div>
            <button type="submit" class="btn1 btn-primary1">Login</button>
            <a href="<?php echo e(route('register')); ?>" class="btn2 btn-link1">Register Now</a>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Sinister\Downloads\SSP Submission\SSP Submission\artfusion\artfusion\resources\views\Auth\login.blade.php ENDPATH**/ ?>