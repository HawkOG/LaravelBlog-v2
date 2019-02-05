
<?php $__env->startSection('content'); ?>

<div class='col-lg-12 mt-4 p-0 m-0 mb-5'>

    <div class="col-md-12 p-0 mt-4">
            <div class="card">
              
                    <div class="card-body border-0">
                    <p><a class="btn btn-default ml-5" href="/" role="button"><</a>
                      
                      <h1 class="postHeading pl-5"><?php echo e($post->title); ?></h1>
                    <p class="pl-5">Written by <?php echo e(Auth::user()->name); ?>, at <?php echo e($post->created_at); ?></p>
                      <div class="row">
                      <div class="col-2">
    <img style="margin-top:1em;width:100px;margin-left:2em" align="left" src="/storage/cover_images/<?php echo $post->cover_image; ?>">
                      </div>
                      <div class="col">
                      <p class="pl-5"><?php echo $post->body; ?></p>
                      </div>
                    </div>
                      



                      <?php if(Auth::user()->id == $post->user_id): ?>
                      <span class="pull-right">
                            <a href="/posts/<?php echo e($post->id); ?>/edit" class='btn btn-info'>Edit</a>
                            <a href="/delete/<?php echo e($post->id); ?>" class='btn btn-danger'>Delete</a>
                      </span>
                      <div class='mt-5'>
                        <h3>Post a comment!</h3>

                        
                        <form class='mt-2' id='<?php echo e($post->id); ?>' action='/comment/<?php echo e($post->id); ?>' method='post'>
                            
                          <textarea name="comment" class='form-control' id="article-ckeditor" cols="30" rows="10" placeholder='comment' required></textarea>
                          <button class='btn btn-primary mt-2'>Post</button>
                        </form>
                        

                      </div>
                      <?php endif; ?> 
                </h5>   
      </div>
      
</div>
</div>
</div>
</div>
        
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>