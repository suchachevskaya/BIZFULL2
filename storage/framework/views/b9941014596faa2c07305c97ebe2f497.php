<div class="all-project-container">
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

    <div class="projectCardContainer">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!--[if BLOCK]><![endif]--><?php if($project->status=='resolved' || auth()->user()->hasRole('admin')): ?>
                <div class="show-best rounded slider">
                    <img class="image" src="<?php echo e(asset('storage/images/' . $project->attachment)); ?>" alt="Attachment Image">
                    <div class=""><?php echo e($project->title); ?></div>
                    <div class=""><?php echo e($project->contact); ?></div>

                    <a href="<?php echo e(route('project-page', ['id' => $project->id])); ?>">
                        <button>
                            more
                        </button>
                    </a>

                    <!--[if BLOCK]><![endif]--><?php if(auth()->user()->hasRole('admin')): ?>
                        <div>
                            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('update-status', ['project' => $project]);

$__html = app('livewire')->mount($__name, $__params, 'lw-507232281-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                        </div>
                        <div>
                            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('delete-project', ['project' => $project]);

$__html = app('livewire')->mount($__name, $__params, 'lw-507232281-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                        </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </div>
    <div><?php echo e($projects->links('pagination::default')); ?></div>

    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('footer');

$__html = app('livewire')->mount($__name, $__params, 'lw-507232281-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>;
</div>
<?php /**PATH C:\OSPanel\BIZFULL2\resources\views/livewire/view-projects.blade.php ENDPATH**/ ?>