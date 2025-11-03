<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Saya</title>
</head>
<body style="background: #f4f6f8; font-family: Arial, sans-serif;">
    <?php echo $__env->make('layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <main style="max-width: 700px; margin: 50px auto; padding: 30px; background: white; border-radius: 12px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        <h2 style="font-size: 28px; margin-bottom: 20px; color: #333; text-align: center;">
            Hubungi Saya 📞
        </h2>
        <?php if($errors->any()): ?>
            <div style="background-color: #ffe6e6; color: #b30000; padding: 12px; border-radius: 8px; margin-bottom: 20px;">
                <ul style="margin: 0; padding-left: 20px;">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <form action="<?php echo e(route('Kirim')); ?>" method="POST" style="text-align: left;">
            <?php echo csrf_field(); ?>

            <div style="margin-bottom: 15px;">
                <label for="nama" style="font-weight: bold; color: #333;">Nama:</label><br>
                <input type="text" name="nama" id="nama" required
                       style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 8px; font-size: 15px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="email" style="font-weight: bold; color: #333;">Email:</label><br>
                <input type="email" name="email" id="email" required
                       style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 8px; font-size: 15px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="pesan" style="font-weight: bold; color: #333;">Pesan:</label><br>
                <textarea name="pesan" id="pesan" rows="5" required
                          style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 8px; font-size: 15px;"></textarea>
            </div>

            <button type="submit"
                    style="display: inline-block; background: #25D366; color: white; 
                           padding: 12px 20px; border-radius: 8px; text-decoration: none; 
                           font-size: 18px; font-weight: bold; box-shadow: 0 3px 6px rgba(0,0,0,0.2);
                           cursor: pointer; transition: background 0.3s;">
                Kirim ke WhatsApp
            </button>
        </form>

        <hr style="margin: 30px 0; border: none; border-top: 1px solid #eee;">
    </main>
    <?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>
</html>
<?php /**PATH D:\SEMESTER 5\Pemrograman Framework\2023150103-IDAMAS\laravel\resources\views/Kontak.blade.php ENDPATH**/ ?>