<div>
    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <label for="faq<?php echo e($index); ?>">Вопрос <?php echo e($index + 1); ?>:</label><br>
        <input type="text" id="amount<?php echo e($index); ?>" wire:model="faqs.<?php echo e($index); ?>.amount" placeholder="Введите вопрос <?php echo e($index + 1); ?>"><br>
        <label for="faq<?php echo e($index); ?>">Ответ <?php echo e($index + 1); ?>:</label><br>
        <input type="text" id="faq<?php echo e($index); ?>" wire:model="faqs.<?php echo e($index); ?>.description" placeholder="Введите ответ <?php echo e($index + 1); ?>"><br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

    <button wire:click="addFaq">Добавить вопрос и ответ</button>
</div>
<?php /**PATH C:\OSPanel\BIZFULL2\resources\views/livewire/create-f-a-q.blade.php ENDPATH**/ ?>