<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1 class="mb-4">Daftar Anggota Perpustakaan</h1>

    <table class="table table-bordered table-striped">

        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Kode Anggota</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

            <?php $__currentLoopData = $anggota_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $anggota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td><?php echo e($index + 1); ?></td>
                <td><?php echo e($anggota['kode']); ?></td>
                <td><?php echo e($anggota['nama']); ?></td>
                <td><?php echo e($anggota['email']); ?></td>

                <td>
                    <?php if($anggota['status'] == 'Aktif'): ?>
                        <span class="badge bg-success">Aktif</span>
                    <?php else: ?>
                        <span class="badge bg-danger">Nonaktif</span>
                    <?php endif; ?>
                </td>

                <td>
                    <a href="<?php echo e(route('anggota.show', $anggota['id'])); ?>"
                       class="btn btn-primary btn-sm">
                        Detail
                    </a>
                </td>
            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>

    </table>

</div>

</body>
</html><?php /**PATH C:\Users\user\perpustakaan-9\resources\views/anggota/index.blade.php ENDPATH**/ ?>