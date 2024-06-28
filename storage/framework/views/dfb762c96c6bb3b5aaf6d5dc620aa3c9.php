<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff; /* Light blue background */
            font-family: 'Arial', sans-serif;
        }
        .container {
            background-color: #ffffff; /* White background for the container */
            padding: 2cm 1cm;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-top: 2cm;
        }
        h1, h2 {
            color: #333;
        }
        table {
            margin-top: 1cm;
        }
        .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn-primary:hover {
            background-color: #218838;
            border-color: #218838;
        }
        .btn-success {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-success:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <div class="d-flex justify-content-between mb-3">
            <a href="<?php echo e(route('tambah')); ?>" class="btn btn-primary">Tambah Data</a>
            <form action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button class="btn btn-danger">Logout</button>
            </form>
        </div>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Usia</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($p->id); ?></td>
                        <td><?php echo e($p->nama); ?></td>
                        <td><?php echo e($p->age); ?></td>
                        <td><?php echo e($p->email); ?></td>
                        <td>
                            <a href="<?php echo e(route('edit', ['id' => $p->id])); ?>" class="btn btn-success btn-sm">Edit</a>
                            <a href="<?php echo e(route('hapus', ['id' => $p->id])); ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\Andy\Downloads\andy\resources\views/index.blade.php ENDPATH**/ ?>