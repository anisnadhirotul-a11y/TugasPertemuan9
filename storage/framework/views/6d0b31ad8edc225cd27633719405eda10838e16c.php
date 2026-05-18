

<?php $__env->startSection('content'); ?>

<div class="container mt-5">

    <h1 class="mb-4">Daftar Kategori Buku</h1>

    <div class="row">

        <?php $__currentLoopData = $kategori_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="col-md-4 mb-4">

            <div class="card shadow h-100">

                <div class="card-body">

                    <h4><?php echo e($kategori['nama']); ?></h4>

                    <p><?php echo e($kategori['deskripsi']); ?></p>

                    <span class="badge bg-primary">
                        <?php echo e($kategori['jumlah_buku']); ?> Buku
                    </span>

                    <hr>

                    <a href="<?php echo e(route('kategori.show', $kategori['id'])); ?>"
                       class="btn btn-success">
                        Detail
                    </a>

                </div>

            </div>

        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\perpustakaan-9\resources\views/kategori/index.blade.php ENDPATH**/ ?>