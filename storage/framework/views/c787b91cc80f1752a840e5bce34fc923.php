<div>
    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <label for="social<?php echo e($index); ?>">Социальная сеть <?php echo e($index + 1); ?>:</label><br>
        <select id="social<?php echo e($index); ?>" name="social<?php echo e($index); ?>">
            <option value="facebook">Facebook</option>
            <option value="twitter">Twitter</option>
            <option value="instagram">Instagram</option>
        </select><br>
        <label for="link<?php echo e($index); ?>">Ссылка <?php echo e($index + 1); ?>:</label><br>
        <input type="text" id="link<?php echo e($index); ?>" wire:model="socials.<?php echo e($index); ?>.description" placeholder="Введите вашу ссылку <?php echo e($index + 1); ?>"><br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

    <button wire:click="addSocial">Добавить социальную сеть</button>
</div>
<?php /**PATH C:\OSPanel\BIZFULL2\resources\views/livewire/create-social.blade.php ENDPATH**/ ?>