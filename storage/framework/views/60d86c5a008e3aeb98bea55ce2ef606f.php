<div class="status-buttons-container">
    <!--[if BLOCK]><![endif]--><?php if(session()->has('message')): ?>
        <div class="alert alert-success"><?php echo e(session('message')); ?></div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <!--[if BLOCK]><![endif]--><?php if(session()->has('error')): ?>
        <div class="alert alert-danger">
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]--> <br>
    <div class="status-buttons">
        <div> Approve the project: </div>
        <button wire:click="changeStatus('resolved')">
            resolved
        </button>
    </div>

    <div class="status-buttons">
        <div>Reject the project:</div>
        <button wire:click="changeStatus('rejected')">
            rejected
        </button>
    </div>


</div>
<?php /**PATH C:\OSPanel\BIZFULL2\resources\views/livewire/update-status.blade.php ENDPATH**/ ?>