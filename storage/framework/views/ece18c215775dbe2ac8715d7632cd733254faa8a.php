
<?php $__env->startSection('content'); ?>
    <!-- Page Content -->
    <div class="container">
      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          
          <!-- Title -->
          <h1 class="mt-4 postHeading post-body"><?php echo e($post->title); ?></h1>
        <small>Posted by <?php echo e(Auth::user()->name); ?>. Category <?php echo e($post->cat); ?></small>
          <!-- Author -->
          <p class="lead b-2">
            
    <img style="width:200px;margin-right:20px;" align="left" src="/storage/cover_images/<?php echo $post->cover_image; ?>">
           
                        <p href="#" class="mr-4"><?php echo str_limit($post->body, 400); ?></p>
          
          <a href="/post/<?php echo e($post->id); ?>" class="mr-2">Continue reading</a> <a href="/post/<?php echo e($post->id); ?>/comments">Comments (#)</a>
          </p>
        
          <hr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
          

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>

          <!-- Single Comment -->
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h3 class="card-header">Search</h3>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><?php echo e($post->cat); ?></li>

                  
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Latest Posts</h5>
            <div class="card-body">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="/post/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5">
      <div class="container-fluid">
        <p class="m-0 text-center text-dark">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>
          </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>