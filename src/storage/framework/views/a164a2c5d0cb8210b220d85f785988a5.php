<?php $__currentLoopData = $shares; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $share): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($loop->iteration); ?></td>
        <td><?php echo e($share->title); ?></td>
        <td><?php echo e($share->description); ?></td>
        <td><?php echo e($share->discount); ?></td>
        <td><?php echo e($share->share_type->title()); ?></td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/laravel/resources/views/shares/share-item.blade.php ENDPATH**/ ?>