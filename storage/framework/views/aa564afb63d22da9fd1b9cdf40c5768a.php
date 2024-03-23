<div>

    <div class="delete-button">
        <div>Delete a project</div>
        <button wire:click="deleteProject(<?php echo e($project->id); ?>)">
            Delete
        </button>

        <!--[if BLOCK]><![endif]--><?php if(session()->has('message')): ?>
            <div class="alert alert-success"><?php echo e(session('message')); ?></div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        <!--[if BLOCK]><![endif]--><?php if(session()->has('error')): ?>
            <div class="alert alert-danger">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>
</div>

<?php /**PATH C:\OSPanel\BIZFULL2\resources\views/livewire/delete-project.blade.php ENDPATH**/ ?>