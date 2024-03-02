<div class="project-container">
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
                        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                </div>
            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
        </div>

    </div>
    <div class="title-project">
        <h1><?php echo e($project->title); ?></h1>
    </div>

    <div class="page-project-container">
        <div>

            <p><?php echo e($project->description); ?></p>
            <p>Категория: <?php echo e($project->category); ?></p>
            <p>Статус: <?php echo e($project->status); ?></p>
            <p>Срок выполнения: <?php echo e($project->deadline); ?></p>
            <p>Описание:<?php echo e($project->description); ?></p>
        </div>
        <div class="page-project-img">
            <img class="image" src="<?php echo e(asset('storage/images/' . $project->attachment)); ?>"/>
        </div>
        <div class="page-project-comment">
            <p>Question/answer</p>
            <input/>
            <button>Send</button>
            <div>
                <div>
                    <img class="image" src="<?php echo e(asset('img/face-1.png')); ?>"/>
                    <p>blablabla</p>
                </div>
            </div>
        </div>
    </div>


    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('payment-process', ['project' => $project]);

$__html = app('livewire')->mount($__name, $__params, 'lw-932720685-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('footer');

$__html = app('livewire')->mount($__name, $__params, 'lw-932720685-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>;
</div>
<?php /**PATH C:\OSPanel\BIZFULL2\resources\views/livewire/project-page.blade.php ENDPATH**/ ?>