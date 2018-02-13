<?php $__env->startSection('title', 'Russia 2018'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

				<div class="form-group">

					<?php echo Form::open(['url' => 'group', 'method' => 'POST']); ?>


	                <?php echo Form::token(); ?>


	                <div class="form-group">
						<?php echo Form::label('name', 'Group'); ?> <br>
						<?php echo Form::text('name'); ?>

					</div>

					<div class="form-group">
						<?php echo Form::submit('Submit'); ?>

					</div>
	    
					<?php echo Form::close(); ?>

				    
				</div>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>