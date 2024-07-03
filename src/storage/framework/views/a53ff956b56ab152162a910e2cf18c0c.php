<?php $__env->startSection('main'); ?>
    <div class="container-lg">
        <table class="table mt-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Полное имя</th>
                    <th scope="col">Номер телефона</th>
                    <th scope="col">Дата рождения</th>
                    <th scope="col">Баллы</th>
                    <th scope="col">Почта</th>
                    <th scope="col">Действия</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $__env->make('clients.client-item', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel/resources/views/clients/clients-list.blade.php ENDPATH**/ ?>