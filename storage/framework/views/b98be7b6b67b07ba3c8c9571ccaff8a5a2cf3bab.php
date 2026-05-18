

<?php $__env->startSection('content'); ?>

<div class="container mt-5">

    <nav aria-label="breadcrumb">

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo e(route('kategori.index')); ?>">Kategori</a>
            </li>

            <li class="breadcrumb-item active">
                <?php echo e($kategori['nama']); ?>

            </li>
        </ol>

    </nav>

    <div class="card shadow">

        <div class="card-body">

            <h2><?php echo e($kategori['nama']); ?></h2>

            <p><?php echo e($kategori['deskripsi']); ?></p>

            <span class="badge bg-primary">
                <?php echo e($kategori['jumlah_buku']); ?> Buku
            </span>

        </div>

    </div>

    <h3 class="mt-4">Daftar Buku</h3>

    <table class="table table-bordered">

        <thead class="table-dark">

            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Tahun</th>
            </tr>

        </thead>

        <tbody>

            <?php $__currentLoopData = $buku_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $buku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td><?php echo e($index + 1); ?></td>
                <td><?php echo e($buku['judul']); ?></td>
                <td><?php echo e($buku['pengarang']); ?></td>
                <td><?php echo e($buku['tahun']); ?></td>
            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>

    </table>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\perpustakaan-9\resources\views/kategori/show.blade.php ENDPATH**/ ?>