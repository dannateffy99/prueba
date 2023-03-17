<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('name')); ?>

            <?php echo e(Form::text('name', $curso->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name'])); ?>

            <?php echo $errors->first('name', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('estado')); ?>

            <?php echo e(Form::text('estado', $curso->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado'])); ?>

            <?php echo $errors->first('estado', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('date')); ?>

            <?php echo e(Form::text('date', $curso->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Date'])); ?>

            <?php echo $errors->first('date', '<div class="invalid-feedback">:message</div>'); ?>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
    </div>
</div><?php /**PATH C:\xampp\htdocs\PruebaParcial\resources\views/curso/form.blade.php ENDPATH**/ ?>