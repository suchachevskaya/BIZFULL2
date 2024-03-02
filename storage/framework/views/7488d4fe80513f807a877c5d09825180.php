<div>
    <select wire:model="status">
        <option value="all">All</option>
        <option value="open">Open</option>
        <option value="resolved">Resolved</option>
        <option value="rejected">Rejected</option>
    </select>

    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Отображение проекта -->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH C:\OSPanel\BIZFULL2\resources\views/livewire/filter-projects.blade.php ENDPATH**/ ?>