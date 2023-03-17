<?php $__env->startSection('template_title'); ?>
    <?php echo e(__('Create')); ?> Curso
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <?php if ($__env->exists('partials.errors')) echo $__env->make('partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"><?php echo e(__('Create')); ?> Curso</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('cursos.store')); ?>"  role="form" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <?php echo $__env->make('curso.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PruebaParcial\resources\views/curso/create.blade.php ENDPATH**/ ?>