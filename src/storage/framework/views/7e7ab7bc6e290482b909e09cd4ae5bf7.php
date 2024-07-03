<?php $__env->startSection('main'); ?>
    <div class="container-lg">
        <table class="table mt-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Загаловок</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Скидка</th>
                    <th scope="col">Тип</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $__env->make('shares.share-item', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel/resources/views/shares/shares-list.blade.php ENDPATH**/ ?>