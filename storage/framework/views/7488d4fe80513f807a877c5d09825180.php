<div >
    <form wire:submit.prevent="findProjects" class="filter-container">
        <input wire:model="funding" type="range" min="0" max="1000000"
               class="slider" id="funding">
        <input wire:model="deadline" type="range" min="2024" max="2030"
               class="slider" id="deadline">

        <select wire:model="projectStatus" class="projectStatus"
                id="projectStatus">
            <option value="" disabled selected>Select status</option>
            <option value="open">open</option>
            <option value="resolved">resolved</option>
            <option value="rejected">rejected</option>
        </select>

        <select wire:model="category" id="category" name="category">
            <option value="" disabled selected>Select a category</option>
            <option value="technology">Technologies</option>
            <option value="art">Art and Culture</option>
            <option value="health">Health and Well-being</option>
            <option value="education">Education</option>
            <option value="ecology">Ecology and sustainability</option>
            <option value="social">Social initiatives</option>
            <option value="science and research">Science and research</option>
        </select>
        <select wire:model="order" class="order" id="order">
            <option value="" disabled selected>Select order</option>
            <option value="newToOld">from new to old</option>
            <option value="oldToNew">from old to new</option>
        </select>

        <button wire:click="resetFilters" class="buttonFilter" id="resetFilters">Сбросить</button>
        <button type="submit" class="buttonFilter" id="findProjects">Find</button>
    </form>
</div>

<?php /**PATH C:\OSPanel\BIZFULL2\resources\views/livewire/filter-projects.blade.php ENDPATH**/ ?>