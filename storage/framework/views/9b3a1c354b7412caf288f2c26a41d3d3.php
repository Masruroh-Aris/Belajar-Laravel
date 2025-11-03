<body>
    <?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <div class="container mt-5 mb-5">
        <h2>DETAIL AKTIVITAS</h2>
        <div class="card-body">
            <h5 class="card-title"><?php echo e($aktivitas->nama_aktivitas); ?></h5>
            <p class="card-text"><strong>Deskripsi:</strong><?php echo e($aktivitas->deskripsi); ?></p>
            <p class="card-text"><strong>Tanggal:</strong><?php echo e($aktivitas->tanggal); ?></p>
            <p class="card-text"><strong>Status:</strong><?php echo e($aktivitas->status ? 'Selesai' : 'Belum Selesai'); ?></p>

        </div>
    </div>
    <?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body><?php /**PATH D:\SEMESTER 5\Pemrograman Framework\2023150103-IDAMAS\laravel\resources\views/aktivitas/show.blade.php ENDPATH**/ ?>