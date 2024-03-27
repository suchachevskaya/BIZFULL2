<div class="all-project-container">
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('header');

$__html = app('livewire')->mount($__name, $__params, 'lw-507232281-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

    <div>
        <form class="filterProjects" wire:submit.prevent="applyFilter">
            <div>
                <p>Required amount:</p>
                <div class="input-wrapper">
                    <input type="range" min="0" max="100000" class="slider" id="funding"
                           wire:model.defer="fundingFilter">
                    <input type="number" min="0" max="100000" wire:model.defer="fundingFilter">
                </div>

            </div>
            <div>
                <p> Donation deadline:</p>
                <div class="input-wrapper">
                    <input wire:model.defer="deadline" type="range" min="2024" max="2030" class="slider" id="deadline">
                    <input type="number" min="2024" max="2030" wire:model.defer="deadline">
                </div>

            </div>
            <div>
                <select wire:model.defer="projectStatus" class="projectStatus"
                        id="projectStatus">
                    <option value="" disabled selected>Select status</option>
                    <option value="open">open</option>
                    <option value="resolved">resolved</option>
                    <option value="rejected">rejected</option>
                </select>
            </div>

            <div>
                <select wire:model.defer="category" id="category" name="category">
                    <option value="" disabled selected>Select a category</option>
                    <option value="technology">Technologies</option>
                    <option value="art">Art and Culture</option>
                    <option value="health">Health and Well-being</option>
                    <option value="education">Education</option>
                    <option value="ecology">Ecology and sustainability</option>
                    <option value="social">Social initiatives</option>
                    <option value="science and research">Science and research</option>
                </select>
            </div>
            <div>
                <select wire:model.defer="order" class="order" id="order">
                    <option value="" disabled selected>Select order</option>
                    <option value="newToOld">from new to old</option>
                    <option value="oldToNew">from old to new</option>
                </select>
            </div>


            <button type="submit">Find</button>
        </form>
    </div>


    <div class="projectCardContainer">
        <!--[if BLOCK]><![endif]--><?php if($projects->isEmpty()): ?>
            <p>There are no suitable projects according to your parameters</p>
        <?php else: ?>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!--[if BLOCK]><![endif]--><?php if($project->status=='resolved' || auth()->user()->hasRole('admin')): ?>
                    <div class="show-best rounded slider" wire:key="<?php echo e($project->id); ?>">
                        <img class="image" src="<?php echo e(asset('storage/images/' . $project->attachment)); ?>"
                             alt="Attachment Image">
                        <h3 class=""><?php echo e($project->title); ?></h3>
                        <p class=""><?php echo e($project->contact); ?></p>
                        <p><?php echo e($project->short_desc); ?></p>

                        <a href="<?php echo e(route('project-page', ['id' => $project->id])); ?>">
                            <button>
                                more
                            </button>
                        </a>

                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>
    <div><?php echo e($projects->links('pagination::default')); ?></div>

    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('footer');

$__html = app('livewire')->mount($__name, $__params, 'lw-507232281-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>;
</div>
<?php /**PATH C:\OSPanel\BIZFULL2\resources\views/livewire/view-projects.blade.php ENDPATH**/ ?>