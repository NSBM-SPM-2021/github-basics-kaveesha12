<?php $__env->startSection('banner'); ?>
    <div class="jumbotron">
        <div class="container">
            <h1>Join NSbM Community</h1>
            <p>Help and get help</p>
            <p>
                <a class="btn btn-primary btn-lg">Learn more</a>
            </p>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('heading',"Threads"); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('thread.partials.thread-list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>