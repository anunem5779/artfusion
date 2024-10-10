<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo e(url('/home')); ?>"><h2>ARTFUSION</h2></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo e(route('gallery-index')); ?>">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/auction')); ?>">Auction</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/offers')); ?>">Offers</a>
                </li>
            </ul>
            <form class="d-flex ms-auto" action="<?php echo e(url('/search')); ?>" method="GET">
                <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <a class="btn btn-primary ms-3" href="<?php echo e(url('/wishlist')); ?>">Wishlist</a>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\Sinister\Downloads\SSP Submission\SSP Submission\artfusion\artfusion\resources\views\layouts\navbar.blade.php ENDPATH**/ ?>