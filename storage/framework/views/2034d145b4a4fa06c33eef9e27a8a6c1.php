<div class="header-container-wrapper">
    <div class="header-container">

        <a class="logoContainer" href="<?php echo e(url('/welcome')); ?>">
            <div>
                <img class="image" src="<?php echo e(asset('img/image-lg.png')); ?>"/>
            </div>
            <h1>
                BIZFULL
            </h1>
        </a>
        <div class="header-Wrapper">
            <!--[if BLOCK]><![endif]--><?php if(Route::has('login')): ?>
                <!--[if BLOCK]><![endif]--><?php if(auth()->guard()->check()): ?>
                    <div class="header">
                        <a href="<?php echo e(url('/create-project')); ?>" class="profile-button">New project</a>
                    </div>
                    <div class="header">
                        <a href="<?php echo e(url('/view-projects')); ?>" class="profile-button">All projects</a>
                    </div>
                    <div class="header">
                        <a href="<?php echo e(url('/user/profile')); ?>" class="profile-button">Profile</a>
                    </div>
                <?php else: ?>
                    <div class="header">
                        <a href="<?php echo e(route('login')); ?>">Log in</a>
                        <!--[if BLOCK]><![endif]--><?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>
</div>

<?php /**PATH C:\OSPanel\BIZFULL2\resources\views/livewire/header.blade.php ENDPATH**/ ?>