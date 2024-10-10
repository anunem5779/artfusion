

<?php $__env->startSection('content'); ?>
<div class="login-container">
    <div class="login-box">
        <h2>ARTFUSION - Admin Login</h2>
        <form method="POST" action="<?php echo e(url('/admin-login')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="admin_id">Admin ID</label>
                <input type="text" name="admin_id" id="admin_id" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Sinister\Downloads\SSP Submission\SSP Submission\artfusion\artfusion\resources\views\Auth\admin_login.blade.php ENDPATH**/ ?>