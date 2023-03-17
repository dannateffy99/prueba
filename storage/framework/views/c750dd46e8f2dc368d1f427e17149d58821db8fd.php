<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('curso')); ?>

            <?php echo e(Form::select('id_curso', $nota->id_curso, ['class' => 'form-control' . ($errors->has('id_curso') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese curso'])); ?>

            <?php echo $errors->first('id_curso', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('notas3')); ?>

            <?php echo e(Form::text('notas3', $nota->notas3, ['class' => 'form-control' . ($errors->has('notas3') ? ' is-invalid' : ''), 'placeholder' => 'Notas3'])); ?>

            <?php echo $errors->first('notas3', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('notas2')); ?>

            <?php echo e(Form::text('notas2', $nota->notas2, ['class' => 'form-control' . ($errors->has('notas2') ? ' is-invalid' : ''), 'placeholder' => 'Notas2'])); ?>

            <?php echo $errors->first('notas2', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('notas1')); ?>

            <?php echo e(Form::text('notas1', $nota->notas1, ['class' => 'form-control' . ($errors->has('notas1') ? ' is-invalid' : ''), 'placeholder' => 'Notas1'])); ?>

            <?php echo $errors->first('notas1', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('date')); ?>

            <?php echo e(Form::text('date', $nota->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Date'])); ?>

            <?php echo $errors->first('date', '<div class="invalid-feedback">:message</div>'); ?>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
    </div>
</div><?php /**PATH C:\xampp\htdocs\PruebaParcial\resources\views/nota/form.blade.php ENDPATH**/ ?>