<div>
    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <label for="faq<?php echo e($index); ?>">Question <?php echo e($index + 1); ?>:</label><br>
        <input type="text" id="question<?php echo e($index); ?>" wire:model="faqs.<?php echo e($index); ?>.question"
               placeholder="Enter a question<?php echo e($index + 2); ?>"><br>
        <label for="answer<?php echo e($index); ?>">Answer <?php echo e($index + 1); ?>:</label><br>
        <input type="text" id="answer<?php echo e($index); ?>" wire:model="faqs.<?php echo e($index); ?>.answer"
               placeholder="Enter your answer <?php echo e($index + 2); ?>"><br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    <div class="createProjectButtonWrapper" >
        <button class="addButton" wire:click="addFaq"> Add faq</button>
    </div>

</div>
<?php /**PATH C:\OSPanel\BIZFULL2\resources\views/livewire/create-f-a-q.blade.php ENDPATH**/ ?>