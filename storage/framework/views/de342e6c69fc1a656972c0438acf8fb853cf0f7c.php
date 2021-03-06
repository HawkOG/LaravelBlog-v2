
<?php $__env->startSection('content'); ?>
  <a href="/posts" class="btn btn-default">Go back</a>
  <h1 class="showPost__title"><?php echo e($post->title); ?></h1>
  <div>
    <?php echo $post->body; ?>

    <img style="width:50px" src="/storage/cover_images/<?php echo $post->cover_image; ?>">
  </div>
  <hr>
<small>Written on <?php echo e($post->created_at); ?> by <?php echo e(Auth::user()->name); ?>. Category: <?php echo e($post->cat); ?></small>
  <hr>

  <?php if(!Auth::guest()): ?>
    <?php if(Auth::user()->id == $post->user_id): ?>
  <a href="/posts/<?php echo e($post->id); ?>/edit" class="float-left btn btn-default">Edit Post</a>
  <?php echo Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-left']); ?>

  <?php echo e(Form::hidden('_method', 'DELETE')); ?>

  <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

  <?php echo Form::close(); ?>

  <?php endif; ?>
  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>