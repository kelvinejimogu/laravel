<?php $__env->startSection('title', '| About'); ?>

<?php $__env->startSection('content'); ?>
        <div class="row">
            <div class="col-md-12">
                <h1>About Me</h1>
                <p>Email : <?php echo e($data['email']); ?> </p>
                <p>Fullname: <?php echo e($data['fullname']); ?> </p>
                <?php /*<p> a: <?php echo e($a); ?> <br> b: <?php echo e($b); ?> <br> c: <?php echo e($c); ?></p>*/ ?>
                    <?php /*$data['fullname'] = $fullname;</p>*/ ?>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis aspernatur quas quibusdam veniam sunt animi, est quos optio explicabo deleniti inventore unde minus, tempore enim ratione praesentium, cumque, dolores nesciunt?</p>
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>