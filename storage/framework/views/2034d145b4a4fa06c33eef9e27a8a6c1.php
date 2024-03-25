<div class="header-container">
    <a class="logoContainer" href="<?php echo e(url('/welcome')); ?>">
        <div>
            <img class="image" src="<?php echo e(asset('img/image-lg.png')); ?>"/>
        </div>
        <h1>
            BIZFULL
        </h1>
    </a>

    <div class="header">
        <!--[if BLOCK]><![endif]--><?php if(Route::has('login')): ?>
            <div>
                <!--[if BLOCK]><![endif]--><?php if(auth()->guard()->check()): ?>
                    <a href="<?php echo e(url('/user/profile')); ?>" class="profile-button">Profile</a>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>">Log in</a>
                    <!--[if BLOCK]><![endif]--><?php if(Route::has('register')): ?>
                        <a href="<?php echo e(route('register')); ?>">Register</a>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>
</div>
<?php /**PATH C:\OSPanel\BIZFULL2\resources\views/livewire/header.blade.php ENDPATH**/ ?>