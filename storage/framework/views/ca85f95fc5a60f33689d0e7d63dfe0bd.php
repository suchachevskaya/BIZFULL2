<div>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('header');

$__html = app('livewire')->mount($__name, $__params, 'lw-1896516341-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

    <div class="containerCreateForm">
        <form wire:submit.prevent="saveProject">
            <!--[if BLOCK]><![endif]--><?php if($currentStep == 1): ?>

                <h2>Basic Information</h2>
                <label for="category">Category:</label><br>
                <select wire:model="category" id="category" name="category">
                    <option value="" disabled selected>Select a category</option>
                    <option value="technology">Technologies</option>
                    <option value="art">Art and Culture</option>
                    <option value="health">Health and Well-being</option>
                    <option value="education">Education</option>
                    <option value="ecology">Ecology and sustainability</option>
                    <option value="social">Social initiatives</option>
                    <option value="science and research">Science and research</option>
                </select><br>
                <label for="title">* Project Title:</label><br>
                <input type="text" wire:model="title" id="title" name="title" placeholder="Enter project title"
                       class="<?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><br>
                <label for="short_desc">* Short Description:</label><br>
                <input type="text" wire:model="short_desc" id="short_desc" name="short_desc"
                       placeholder="Enter a brief description of the project"
                       class="<?php $__errorArgs = ['short_desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><br>

            <?php elseif($currentStep == 2): ?>
                <h2>Project Details</h2>
                <label for="description">* Detailed Description:</label><br>
                <textarea wire:model="description" id="description" name="description"
                          placeholder="Enter an in-depth description"
                          class="<?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"></textarea><br>
                <label for="deadline">* Deadlines:</label> <br>
                <input type="date" wire:model="deadline" id="deadline" class="<?php $__errorArgs = ['deadline'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                <label for="funding">* Funding Amount:</label><br>
                <input type="number" wire:model="funding" id="funding" name="funding"
                       placeholder="Enter the required amount" class="<?php $__errorArgs = ['funding'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><br>
            <?php elseif($currentStep == 3): ?>
                <h2>Media</h2>
                <label for="attachment">Main Image:</label><br>
                <input type="file" wire:model="attachment" id="attachment" name="attachment"><br>
                <label for="gallery">Project Gallery:</label><br>
                <input type="file" wire:model="gallery" id="gallery" name="gallery" multiple
                       placeholder="Выберите файлы"><br>
                <label for="video">Video Presentation:</label><br>
                <input type="text" wire:model="video" id="video" name="video" placeholder="Insert a video link"><br>
            <?php elseif($currentStep == 4): ?>
                <h2>Rewards for Sponsors</h2>
                <label for="reward1">Reward:</label><br>
                <input type="text" wire:model="reward.0.descriptionReward" id="reward1" name="reward1"
                       placeholder="Enter reward description"><br>
                <label for="reward1">Amount:</label><br>
                <input type="number" wire:model="reward.0.amount" id="amount1" name="amount1"
                       placeholder="Enter the required donation amount for the reward"><br>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('create-reward');

$__html = app('livewire')->mount($__name, $__params, 'lw-1896516341-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php elseif($currentStep == 5): ?>

                <h2>Contact Information</h2>
                <label for="contact"> * Creator’s Name:</label><br>
                <input type="text" wire:model="contact" id="contact" name="contact" placeholder="Enter your name"
                       class="<?php $__errorArgs = ['contact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><br>
                <label for="email"> * Email:</label><br>
                <input type="email" wire:model="email" id="email" name="email" placeholder="Enter your email"
                       class="<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><br>
                <label for="phone">Phone:</label><br>
                <input type="tel" wire:model="phone" id="phone" name="phone" placeholder="Enter your phone number"><br>
                <label for="social"> Social network:</label><br>
                <select wire:model="social.0.network" id="social" name="social">
                    <option value="facebook">Facebook</option>
                    <option value="twitter">Twitter</option>
                    <option value="instagram">Instagram</option>
                </select><br>
                <label for="link">Link:</label><br>
                <input type="text" wire:model="social.0.link" id="link" name="link" placeholder="Enter your link">
                <br>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('create-social');

$__html = app('livewire')->mount($__name, $__params, 'lw-1896516341-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php elseif($currentStep == 6): ?>

                <h2 for="faq">FAQ</h2><br>
                <label for="faq1">Question:</label><br>
                <input type="text" wire:model="_f_a_g.0.question" id="faq1" name="faq1" placeholder="Введите вопрос">
                <br>
                <label for="faq1"> Answer:</label><br>
                <input type="text" wire:model="_f_a_g.0.answer" id="faq1" name="faq1" placeholder="Введите ответ"><br>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('create-f-a-q');

$__html = app('livewire')->mount($__name, $__params, 'lw-1896516341-3', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                <div class="checkboxisReadyToSubmit">
                    <input type="checkbox" wire:model="isReadyToSubmit">
                    <label for="isReadyToSubmit">I am ready to create a project.</label></div>
                <div class="createProjectButtonWrapper">
                    <button class="createProjectButton" type="submit">Create project</button>
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </form>
    </div>
    <div class="button-nav">
        <!--[if BLOCK]><![endif]--><?php if($currentStep > 1): ?>
            <button wire:click="decreaseStep">Back</button>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--><?php if($currentStep < 6): ?>
            <button wire:click="increaseStep">Next</button>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>


    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('footer');

$__html = app('livewire')->mount($__name, $__params, 'lw-1896516341-4', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>;
</div>
<?php /**PATH C:\OSPanel\BIZFULL2\resources\views/livewire/create-project.blade.php ENDPATH**/ ?>