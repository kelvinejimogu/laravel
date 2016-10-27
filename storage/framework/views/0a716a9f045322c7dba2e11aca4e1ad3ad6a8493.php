<?php $__env->startSection('title', '| Homepage'); ?>

<?php $__env->startSection('content'); ?>
        <div class="row">
            <div class="col-md-8">
                <img class="img-responsive" src="http://placehold.it/750x500" alt="">
            </div>

            <div class="col-md-4">
                <h3>Project Description</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                <h3>Project Details</h3>
                <ul>
                    <li>Lorem Ipsum</li>
                    <li>Dolor Sit Amet</li>
                    <li>Consectetur</li>
                    <li>Adipiscing Elit</li>
                </ul>
            </div>

        
        </div> <!-- end of header .row -->
		
		<div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Related Projects</h3>
            </div>

			<?php foreach($posts as $post): ?>
            <div class="col-sm-3 col-xs-6">

                    <a href="<?php echo e(url('blog/'.$post->slug)); ?>">

<img src="<?php echo e(asset('images/'.$post->image)); ?>" height="120" width="220"/>
</a> 
				
				<hr>
                        <h3><?php echo e($post->title); ?></h3>
                        <p><?php echo e(substr($post->body, 0, 300)); ?><?php echo e(strlen($post->body) > 300 ? "..." : ""); ?></p>
                        <a href="<?php echo e(url('blog/'.$post->slug)); ?>" class="btn btn-primary">Read More</a>
				
            </div> 
			<?php endforeach; ?>
		</div>

        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>