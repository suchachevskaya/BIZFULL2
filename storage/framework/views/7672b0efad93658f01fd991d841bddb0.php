<div class="notification-container">
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('header');

$__html = app('livewire')->mount($__name, $__params, 'lw-1069679888-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <div class="notification">
    <!--[if BLOCK]><![endif]--><?php if(session('message')): ?>
        <h1 class="alert alert-success">
            <?php echo e(session('message')); ?>

        </h1>
    <?php else: ?>
        <h2> Try again</h2>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <div class="button-container">
        <div>
            <!--[if BLOCK]><![endif]--><?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(url('/create-project')); ?>" class="start-button">Start a new project</a>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" class="start-button">Home</a>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
        <div>
            <!--[if BLOCK]><![endif]--><?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(url('/view-projects')); ?>" class="create-button">View all projects</a>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" class="create-button">View all projects</a>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>

    </div>
</div>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('footer');

$__html = app('livewire')->mount($__name, $__params, 'lw-1069679888-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
</div>
<?php /**PATH C:\OSPanel\BIZFULL2\resources\views/livewire/notification-page.blade.php ENDPATH**/ ?>