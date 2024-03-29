<div>
    <div class="show-popular">
        <a wire:click="prev">
            <img src="img/left.png"/>
        </a>
        <div class="show-popular-artical">
            <div>
                <img class="show-popular-img" src="<?php echo e($item['image']); ?>"/>
            </div>

            <div class="article">
                <h2><?php echo e($item['title']); ?></h2>
                <p><?php echo e($item['description']); ?></p>
                <p> Price - <?php echo e($item['price']); ?> Duration - <?php echo e($item['duration']); ?> Instructor
                    - <?php echo e($item['instructor']); ?></p>
                <!--[if BLOCK]><![endif]--><?php if(auth()->guard()->check()): ?>
                    <a href="<?php echo e(url('/view-projects')); ?>" class="create-button">support</a>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>" class="create-button">support</a>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
        <a wire:click="next">
            <img src="img/right.png"/>
        </a>
    </div>

    <div class="dot-wrapper">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <img src="img/dot-<?php echo e($i == $index ? 'd' : 'w'); ?>.png"/>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </div>
</div>
<?php /**PATH C:\OSPanel\BIZFULL2\resources\views/livewire/carousel.blade.php ENDPATH**/ ?>