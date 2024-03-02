<div>
    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $rewards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $reward): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <label for="reward<?php echo e($index); ?>">Награда <?php echo e($index + 1); ?>:</label><br>
        <input type="text" id="reward<?php echo e($index); ?>" wire:model="rewards.<?php echo e($index); ?>.description" placeholder="Введите описание награды <?php echo e($index + 1); ?>"><br>
        <input type="number" id="amount<?php echo e($index); ?>" wire:model="rewards.<?php echo e($index); ?>.amount" placeholder="Введите необходимую сумму пожертвований для награды <?php echo e($index + 1); ?>"><br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->

    <button wire:click="addReward">Добавить награду</button>
</div>
<?php /**PATH C:\OSPanel\BIZFULL2\resources\views/livewire/create-reward.blade.php ENDPATH**/ ?>