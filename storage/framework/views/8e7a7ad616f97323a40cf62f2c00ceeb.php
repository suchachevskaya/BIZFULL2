<div>
    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $rewards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $reward): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <label for="reward<?php echo e($index); ?>">Reward <?php echo e($index + 2); ?>:</label><br>
        <input type="text" id="reward<?php echo e($index); ?>" wire:model="rewards.<?php echo e($index); ?>.description" placeholder="
Enter reward description <?php echo e($index + 2); ?>"><br>
        <input type="number" id="amount<?php echo e($index); ?>" wire:model="rewards.<?php echo e($index); ?>.amount" placeholder="Enter the required donation amount for the reward <?php echo e($index + 2); ?>"><br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

    <button wire:click="addReward">Add reward</button>
</div>
<?php /**PATH C:\OSPanel\BIZFULL2\resources\views/livewire/create-reward.blade.php ENDPATH**/ ?>