<div class="rating-container">
    <div>
        <!--[if BLOCK]><![endif]--><?php if($existingStar): ?>
            <img class="img-rating" wire:click="rate(1)" src="<?php echo e(asset('img/icon/star.png')); ?>" alt="Star">
        <?php else: ?>
            <img class="img-rating" wire:click="rate(1)" src="<?php echo e(asset('img/icon/dstar.png')); ?>" alt="Empty Star">
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>

        <h2> <?php echo e($rating); ?></h2>
</div>
<?php /**PATH C:\OSPanel\BIZFULL2\resources\views/livewire/star-counter.blade.php ENDPATH**/ ?>