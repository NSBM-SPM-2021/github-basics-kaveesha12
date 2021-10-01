<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">


            <!-- Branding Image -->
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                <?php echo e(config('' ,'Portal')); ?>

            </a>
            <a class="navbar-brand" href="<?php echo e(url('blog')); ?>">
                <?php echo e(config('' ,'Blog')); ?>

            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <?php if(Auth::guest()): ?>
                    <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                    <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                <?php else: ?>


                    <li class="dropdown">

                        <a href="<?php echo e(route('notifications' )); ?>" >
                            Notification <span class="badge"><?php echo e(count(auth()->user()->unreadNotifications)); ?></span>
                        </a>


                    </li>

                    <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <a href="<?php echo e(route('user_profile',auth()->user())); ?>">
                                    My Profile
                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                      style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>