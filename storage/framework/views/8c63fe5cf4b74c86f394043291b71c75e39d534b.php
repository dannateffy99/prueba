<?php $__env->startSection('template_title'); ?>
    Nota
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Nota')); ?>

                            </span>

                             <div class="float-right">
                                <a href="<?php echo e(route('notas.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Create New')); ?>

                                </a>
                              </div>
                        </div>
                    </div>
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Curso</th>
										<th>Notas3</th>
										<th>Notas2</th>
										<th>Notas1</th>
										<th>Fecha</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $notas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>
                                            
											<td><?php echo e($nota->curso->name); ?></td>
											<td><?php echo e($nota->notas3); ?></td>
											<td><?php echo e($nota->notas2); ?></td>
											<td><?php echo e($nota->notas1); ?></td>
											<td><?php echo e($nota->date); ?></td>

                                            <td>
                                                <form action="<?php echo e(route('notas.destroy',$nota->id)); ?>" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="<?php echo e(route('notas.show',$nota->id)); ?>"><i class="fa fa-fw fa-eye"></i> <?php echo e(__('Show')); ?></a>
                                                    <a class="btn btn-sm btn-success" href="<?php echo e(route('notas.edit',$nota->id)); ?>"><i class="fa fa-fw fa-edit"></i> <?php echo e(__('Edit')); ?></a>
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> <?php echo e(__('Delete')); ?></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo $notas->links(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PruebaParcial\resources\views/nota/index.blade.php ENDPATH**/ ?>