

<?php $__env->startSection('content'); ?>

<div class="container mt-5">

    <h1>Hasil Pencarian Kategori</h1>

    <div class="alert alert-info">
        Keyword pencarian:
        <strong><?php echo e($keyword); ?></strong>
    </div>

    <?php $__empty_1 = true; $__currentLoopData = $hasil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

        <div class="card mb-3 shadow">

            <div class="card-body">

                <h4>
                    <?php echo e($kategori['nama']); ?>

                </h4>

                <p><?php echo e($kategori['deskripsi']); ?></p>

                <span class="badge bg-primary">
                    <?php echo e($kategori['jumlah_buku']); ?> Buku
                </span>

            </div>

        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

        <div class="alert alert-danger">
            Data kategori tidak ditemukan
        </div>

    <?php endif; ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\perpustakaan-9\resources\views/kategori/search.blade.php ENDPATH**/ ?>