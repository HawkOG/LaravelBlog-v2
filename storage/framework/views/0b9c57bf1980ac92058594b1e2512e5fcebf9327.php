<nav class="navbar navbar-expand-lg rounded-0 pb-0 mb-0 navbar-light navbar-xcolor">
<div class="container">
    <a class="navbar-brand m-0 p-3" href="/"><img src="https://www.crowdspring.com/blog/wp-content/uploads/2017/08/cs_logo.png" class="img-fluid" style="width:150px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
            <a class="nav-link pl-5" href="/posts">Blog</a>
          </li>
        <li class="nav-item">
          <a class="nav-link pl-5" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link pl-5" href="/services">Services</a>
        </li>
      </ul>
    </div>
    <ul class="navbar-nav ml-auto">
       
        </ul>
        <ul class="navbar-nav ml-auto text-light">
            <!-- Authentication Links -->
            <?php if(Auth::guest()): ?>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a></li>

            <?php else: ?>

            <li class="nav-item">
                <a class="nav-link" href="#">Hello, <b><?php echo e(Auth::user()->name); ?></b></a>
              </li>
            <li class="nav-item"><a class="nav-link" href="/home">Dashboard</a></li>
              <li class="nav-item">
                  <a class="nav-link" href="/posts/create">Create post</a>
                </li>
                               
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                                <li class="nav-item text-primary"><a class="pl-3 nav-link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
                          
                          </div>
                           
                        </li>
                    </ul>
                </li>
            <?php endif; ?>
        </ul>
  </nav>
</div>


</div>