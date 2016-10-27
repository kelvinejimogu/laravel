<?php $__env->startSection('title', '| Create New Post'); ?>

<?php $__env->startSection('stylesheets'); ?>

	<?php echo Html::style('css/parsley.css'); ?>

	<?php echo Html::style('css/select2.min.css'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr>

			<?php echo Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '', 'files'=>true)); ?>

			<?php echo Form::open(array('url' => 'posts', 'data-parsley-validate' => '')); ?>

				<?php echo e(Form::label('title', 'Title:')); ?>

				<?php echo e(Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))); ?>


				<?php echo e(Form::label('slug', 'Slug:')); ?>

				<?php echo e(Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255') )); ?>


				<?php echo e(Form::label('category_id', 'Category:')); ?>

				<select class="form-control" name="category_id">
					<?php foreach($categories as $category): ?>
						<option value='<?php echo e($category->id); ?>'><?php echo e($category->name); ?></option>
					<?php endforeach; ?>

				</select>


				<?php echo e(Form::label('tags', 'Tags:')); ?>

				<select class="form-control select2-multi" name="tags[]" multiple="multiple">
					<?php foreach($tags as $tag): ?>
						<option value='<?php echo e($tag->id); ?>'><?php echo e($tag->name); ?></option>
					<?php endforeach; ?>

				</select>
				<?php echo e(Form::label('featured_image', 'upload featured image:')); ?>

				<?php echo e(Form::file('featured_image')); ?>


				<?php echo e(Form::label('body', "Post Body:")); ?>

				<?php echo e(Form::textarea('body', null, array('class' => 'form-control', 'required' => ''))); ?>


				<?php echo e(Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;'))); ?>

			<?php echo Form::close(); ?>

		</div>
	</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

	<?php echo Html::script('js/parsley.min.js'); ?>

	<?php echo Html::script('js/select2.min.js'); ?>


	<script type="text/javascript">
		$('.select2-multi').select2();
	</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>