<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Anggota</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h3>Detail Anggota</h3>
        </div>

        <div class="card-body">

            <table class="table table-borderless">

                <tr>
                    <th width="200">Kode Anggota</th>
                    <td>: <?php echo e($anggota['kode']); ?></td>
                </tr>

                <tr>
                    <th>Nama Lengkap</th>
                    <td>: <?php echo e($anggota['nama']); ?></td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td>: <?php echo e($anggota['email']); ?></td>
                </tr>

                <tr>
                    <th>Telepon</th>
                    <td>: <?php echo e($anggota['telepon']); ?></td>
                </tr>

                <tr>
                    <th>Alamat</th>
                    <td>: <?php echo e($anggota['alamat']); ?></td>
                </tr>

                <tr>
                    <th>Status</th>
                    <td>:
                        <?php if($anggota['status'] == 'Aktif'): ?>
                            <span class="badge bg-success">Aktif</span>
                        <?php else: ?>
                            <span class="badge bg-danger">Nonaktif</span>
                        <?php endif; ?>
                    </td>
                </tr>

            </table>

            <a href="<?php echo e(route('anggota.index')); ?>" class="btn btn-secondary">
                Kembali ke Daftar Anggota
            </a>

        </div>

    </div>

</div>

</body>
</html><?php /**PATH C:\Users\user\perpustakaan-9\resources\views/anggota/show.blade.php ENDPATH**/ ?>