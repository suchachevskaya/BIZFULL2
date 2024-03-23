<div>
    <form wire:submit.prevent="filterProjects">
        <input type="range" min="0" max="100000" class="slider" id="funding" wire:model="fundingFilter">
        <button type="submit">Find</button>
    </form>
</div>

<?php /**PATH C:\OSPanel\BIZFULL2\resources\views/livewire/filter.blade.php ENDPATH**/ ?>