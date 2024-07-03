<?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($loop->iteration); ?></td>
        <td><?php echo e($client->surname); ?> <?php echo e($client->name); ?></td>
        <td><?php echo e($client->phone); ?></td>
        <td><?php echo e($client->birth_date->format('d-m-Y')); ?></td>
        <td><?php echo e($client->points); ?></td>
        <td><?php echo e($client->email); ?></td>
        <td>
            <div class="btn-group" role="group" aria-label="Basic example">
                <form action="<?php echo e(route('clients.delete', ['client' => $client->id])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button type="submit" class="btn btn-danger">
                        Удалить
                    </button>
                </form>
                <a class="btn btn-primary ml-2" href="<?php echo e(route('clients.edit', ['client' => $client->id])); ?>">
                    Редактировать
                </a>
            </div>
        </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/laravel/resources/views/clients/client-item.blade.php ENDPATH**/ ?>