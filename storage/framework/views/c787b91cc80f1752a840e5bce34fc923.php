<div>
    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <label for="social<?php echo e($index); ?>">Social network <?php echo e($index + 2); ?>:</label><br>
        <select id="social<?php echo e($index); ?>" name="social<?php echo e($index); ?>">
            <option value="facebook">Facebook</option>
            <option value="twitter">Twitter</option>
            <option value="instagram">Instagram</option>
        </select><br>
        <label for="link<?php echo e($index); ?>">Link <?php echo e($index + 2); ?>:</label><br>
        <input type="text" id="link<?php echo e($index); ?>" wire:model="socials.<?php echo e($index); ?>.link"
               placeholder="Enter your link <?php echo e($index + 2); ?>"><br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        <div class="createProjectButtonWrapper" >
            <button class="addButton" wire:click="addSocial"> Add social network</button></div>

</div>
<?php /**PATH C:\OSPanel\BIZFULL2\resources\views/livewire/create-social.blade.php ENDPATH**/ ?>