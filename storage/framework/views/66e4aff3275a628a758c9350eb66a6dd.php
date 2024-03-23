<div>
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

    <div class="project-container">
        <div class="project-container-inf">
            <div class="project-section-img">
                <div class="project-img">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $project->galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img class="slide" src="<?php echo e(Storage::url('images/' . $image->image)); ?>" alt="Gallery Image">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
                <div class="project-link">
                    <!--[if BLOCK]><![endif]--><?php if(count($project->socials) > 0): ?>
                        <p>View profile:</p>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $project->socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!--[if BLOCK]><![endif]--><?php if($social->link && in_array($social->network, ['facebook', 'twitter', 'instagram'])): ?>
                                <a href="<?php echo e($social->link); ?>">
                                    <img src="/img/icon/<?php echo e($social->network); ?>.png" alt="<?php echo e($social->network); ?>">
                                </a>

                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    <?php else: ?>
                        <p>No social networks.</p>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
                <div class="project-button">
                    <!--[if BLOCK]><![endif]--><?php if(auth()->user()->hasRole('admin')): ?>
                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('update-status', ['project' => $project]);

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
[$__name, $__params] = $__split('delete-project', ['project' => $project]);

$__html = app('livewire')->mount($__name, $__params, 'lw-932720685-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
                <div class="project-summ-container">
                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('progress-bar', ['total_donations' => $project->total_donations, 'funding' =>
                    $project->funding]);

$__html = app('livewire')->mount($__name, $__params, 'lw-932720685-2', $__slots ?? [], get_defined_vars());

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
[$__name, $__params] = $__split('payment-process', ['project' => $project]);

$__html = app('livewire')->mount($__name, $__params, 'lw-932720685-3', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                </div>

            </div>
            <div class="project-section-content">
                <h1> <?php echo e($project->title); ?></h1>
                <hr>
                <div class="project-inf"><b>Category:</b>
                    <p><?php echo e($project->category); ?></p></div>
                <hr>
                <div class="project-inf"><b>Deadline:</b>
                    <p><?php echo e($project->deadline); ?></p></div>
                <hr>
                <div class="project-inf"><b>Contact:</b>
                    <p><?php echo e($project->contact); ?></p></div>
                <hr>
                <div class="project-inf"><b>Funding:</b>
                    <p><?php echo e($project->funding); ?></p></div>
                <hr>
                <div class="project-inf"><b>Email:</b>
                    <p><?php echo e($project->email); ?></p></div>
                <hr>
                <div class="project-inf"><b>Phone:</b>
                    <p><?php echo e($project->phone); ?></p></div>
                <hr>
                <div class="project-inf"><b>Total donations:</b>
                    <p><?php echo e($project->total_donations); ?></p></div>
                <hr>
                <!--[if BLOCK]><![endif]--><?php if(auth()->user()->hasRole('admin')): ?>
                    <div class="project-inf"><b>Статус:</b>
                        <p><?php echo e($project->status); ?></p></div>
                    <hr>
                    <div class="project-inf"><b>User id:</b>
                        <p><?php echo e($project->user_id); ?></p></div>
                    <hr>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
        <div class="faq-container">
            <p class="faq-section-title">Frequently asked questions:</p>
            <p class="faq-title">What is this project about?</p>
            <p class="faq-description"> <?php echo e($project->description); ?></p>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $project->faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $_f_a_g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p class="faq-question"><?php echo e($_f_a_g->question); ?></p>
                <p class="faq-answer"><?php echo e($_f_a_g->answer); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </div>
        <div>
            <!--[if BLOCK]><![endif]--><?php if(!empty($project->video)): ?>
                <p>View profile:</p>
                <video width="320" height="240" controls>
                    <source src="<?php echo e($project->video); ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            <?php else: ?>
                <!--[if BLOCK]><![endif]--><?php if(auth()->user()->hasRole('admin')): ?>
                    <p>There is no video.</p>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>
    <h2>Your feedback on the <?php echo e($project->title); ?></h2>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('comment');

$__html = app('livewire')->mount($__name, $__params, 'lw-932720685-4', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>;
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('footer');

$__html = app('livewire')->mount($__name, $__params, 'lw-932720685-5', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>;
</div>
<?php /**PATH C:\OSPanel\BIZFULL2\resources\views/livewire/project-page.blade.php ENDPATH**/ ?>