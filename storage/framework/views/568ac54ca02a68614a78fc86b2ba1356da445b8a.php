<?php $__env->startSection('title', '| All Tags'); ?>

<?php $__env->startSection('content'); ?>

	<div class="row">
		<div class="col-md-8">
			<h1>Tags</h1>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach($tags as $tag): ?>
					<tr>
						<th><?php echo e($tag->id); ?></th>
						<td><a href="<?php echo e(route('tags.show', $tag->id)); ?>"><?php echo e($tag->name); ?></a></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div> <!-- end of .col-md-8 -->

		<div class="col-md-3">
			<div class="well">
				<?php echo Form::open(['route' => 'tags.store', 'method' => 'POST']); ?>

					<h2>New Tag</h2>
					<?php echo e(Form::label('name', 'Name:')); ?>

					<?php echo e(Form::text('name', null, ['class' => 'form-control'])); ?>


					<?php echo e(Form::submit('Create New Tag', ['class' => 'btn btn-primary btn-block btn-h1-spacing'])); ?>

				
				<?php echo Form::close(); ?>

			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>