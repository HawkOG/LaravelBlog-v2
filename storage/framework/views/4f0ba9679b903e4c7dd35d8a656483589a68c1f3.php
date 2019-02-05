

<?php $__env->startSection('content'); ?>
    <div class="panel panel-custom">
        <div class="panel-heading">Create post</div>
    <?php echo Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

        <div class="form-group p-4">
            <?php echo e(Form::label('title', 'Title')); ?>

            <?php echo e(Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])); ?>

        </div>
        <div class="form-group p-4">
            <?php echo e(Form::label('body', 'Body')); ?>

            <?php echo e(Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])); ?>

        </div>
        <div class="form-group p-4">
                <?php echo e(Form::label('category', 'Category')); ?>

                
            
            </div>
        <div class="form-group p-4">
            <?php echo e(Form::label('cover_image', 'Upload your image')); ?>

            <?php echo e(Form::file('cover_image', ['class'=>'btn btn-info'])); ?>

        </div>
        <div class="form-group p-4">
        <?php echo e(Form::submit('Submit', ['class'=>'btn btn-info btn-block p-3 border-0'])); ?>

        </div>
    <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>