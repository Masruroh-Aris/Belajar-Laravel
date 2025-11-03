<body>
    <?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div class=""container mt-5 mb-5>
        <h2>DAFTAR AKTIVITAS</h2>
        <a href="<?php echo e(route('aktivitas.create')); ?>" class="btn btn-primary mb-3">
            +Tambah Aktivitas
        </a>
        <table class="table table-bordered" border=1>
            <thead>
                <tr>
                    <th>Nama Aktivitas</th>
                    <th>Deskripsi</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->nama_aktivitas); ?></td>
                    <td><?php echo e($item->deskripsi); ?></td>
                    <td><?php echo e(date('d-m-Y-', strtotime($item->tanggal))); ?></td>
                    <td><?php echo e($item->status ? 'Selesai' : 'Belum Selesai'); ?></td>
                    <td>
                        <a href="<?php echo e(route('aktivitas.show', $item->id)); ?>" class="btn btn-info btn-sm">
                            Detail
                        </a>
                        <a href="<?php echo e(route('aktivitas.edit', $item->id)); ?>" class="btn btn-warning btn-sm">
                            Edit
                        </a>
                        <form action="<?php echo e(route('aktivitas.destroy', $item->id)); ?>" method="POST" class="d-inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus aktivitas ini?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body><?php /**PATH D:\SEMESTER 5\Pemrograman Framework\2023150103-IDAMAS\laravel\resources\views/aktivitas/index.blade.php ENDPATH**/ ?>