<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-custom">
            <div class="panel-heading"><?php echo e(config('app.name')); ?> Dashboard</div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                        <h3 class="text-center">Good day, <?php echo e(Auth::user()->name); ?>.</h3>
                        <hr>
                        <div class="input-group pb-4">
                        <h3 class="float-left mt-0 mb-0">Your Content</h3>
                        <a href="/posts/create" class="pull-right btn btn-default float-right`">Add Post</a>
                    </div>
                        <?php if(count($posts) > 0): ?>
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                    <td><?php echo e($post->title); ?></td>
                                    <td class=""><a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-default">Edit</a></td>
                                    <td> <?php echo Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-left']); ?>


                                            <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                                            <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

                                          
                                            <?php echo Form::close(); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                        <?php else: ?>
                            <p>You have not made any posts.</p>
                        <?php endif; ?>
                        <hr>
                       
                   
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>