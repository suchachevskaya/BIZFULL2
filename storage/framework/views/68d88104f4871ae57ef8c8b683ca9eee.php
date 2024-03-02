<div>
    <form wire:submit.prevent="makePayment">
        <input type="number" wire:model="amount">
        <button type="submit"> Оплатить</button>
    </form>

    <!--[if BLOCK]><![endif]--><?php if(session()->has('message')): ?>
        <div class="alert alert-success">
            <?php echo e(session('message')); ?>

        </div>
    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--><?php if(session()->has('error')): ?>
        <div class="alert alert-danger">
            <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
</div>

<?php /**PATH C:\OSPanel\BIZFULL2\resources\views/livewire/payment-process.blade.php ENDPATH**/ ?>