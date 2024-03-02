<div>
    <div class="header-container">

        <a class="logoContainer" href="<?php echo e(url('/welcome')); ?>">
            <div>
                <img class="image" src="<?php echo e(asset('img/image-lg.png')); ?>"/>
            </div>
            <h1>
                BIZFULL
            </h1>
        </a>
        <div class="header">
            <!--[if BLOCK]><![endif]--><?php if(Route::has('login')): ?>
                <div>
                    <!--[if BLOCK]><![endif]--><?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/user/profile')); ?>" class="profile-button">Profile</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Log in</a>
                        <!--[if BLOCK]><![endif]--><?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                </div>
            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>


    <form wire:submit.prevent="saveProject">
        <h2>Basic Information</h2>
        <label for="title">Project Title:</label><br>
        <input type="text" wire:model="title" id="title" name="title" placeholder="Enter project title"><br>
        <label for="short_desc">Short Description:</label><br>
        <input type="text" wire:model="short_desc" id="short_desc" name="short_desc"
               placeholder="Enter a brief description of the project"><br>
        <label for="category">Category:</label><br>
        <select wire:model="category" id="category" name="category">
            <option value="" disabled selected>Select a category</option>
            <option value="categories">Categories</option>
            <option value="technology">Technologies</option>
            <option value="art">Art and Culture</option>
            <option value="health">Health and Well-being</option>
            <option value="education">Education</option>
            <option value="ecology">Ecology and sustainability</option>
            <option value="social">Social initiatives</option>
            <option value="science and research">Science and research</option>
        </select><br>
        <h2>Project Details</h2>
        <label for="description">Detailed Description:</label><br>
        <textarea wire:model="description" id="description" name="description"
                  placeholder="Enter an in-depth description"></textarea><br>
        <label for="deadline">Deadlines:</label>
        <input type="date" wire:model="deadline" id="deadline">
        <label for="funding">Funding Amount:</label><br>
        <input type="number" wire:model="funding" id="funding" name="funding"
               placeholder="Enter the required amount"><br>

        <h2>Media</h2>
        <label for="attachment">Main Image:</label><br>
        <input type="file" wire:model="attachment" id="attachment" name="attachment"><br>
        <label for="gallery">Project Gallery:</label><br>
        <input type="file" wire:model="gallery" id="gallery" name="gallery" multiple placeholder="Выберите файлы"><br>
        <label for="video">Video Presentation:</label><br>
        <input type="text" wire:model="video" id="video" name="video" placeholder="Insert a video link"><br>

        <h2>Rewards for Sponsors</h2>
        <label for="reward1">Награда:</label><br>
        <input type="text" wire:model="reward.0.descriptionReward" id="reward1" name="reward1"
               placeholder="Введите описание награды"><br>
        <input type="number" wire:model="reward.0.amount" id="amount1" name="amount1"
               placeholder="Введите необходимую сумму пожертвований для награды"><br>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('create-reward');

$__html = app('livewire')->mount($__name, $__params, 'lw-1896516341-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

        <h2>Contact Information</h2>
        <label for="contact">Creator’s Name:</label><br>
        <input type="text" wire:model="contact" id="contact" name="contact" placeholder="Enter your name"><br>
        <label for="email">Email:</label><br>
        <input type="email" wire:model="email" id="email" name="email" placeholder="Enter your email"><br>
        <label for="phone">Phone:</label><br>
        <input type="tel" wire:model="phone" id="phone" name="phone" placeholder="Enter your phone number"><br>
        <label for="social">Социальная сеть:</label><br>
        <select wire:model="social.0.network" id="social" name="social">
            <option value="facebook">Facebook</option>
            <option value="twitter">Twitter</option>
            <option value="instagram">Instagram</option>
        </select><br>
        <label for="link">Ссылка:</label><br>
        <input type="text" wire:model="social.0.link" id="link" name="link" placeholder="Введите вашу ссылку"><br>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('create-social');

$__html = app('livewire')->mount($__name, $__params, 'lw-1896516341-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

        <h2 for="faq">FAQ:</h2><br>
        <label for="faq1">Вопрос:</label><br>
        <input type="text" wire:model="_f_a_g.0.question" id="faq1" name="faq1" placeholder="Введите вопрос"><br>
        <label for="faq1">Ответ:</label><br>
        <input type="text" wire:model="_f_a_g.0.answer" id="faq1" name="faq1" placeholder="Введите ответ"><br>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('create-f-a-q');

$__html = app('livewire')->mount($__name, $__params, 'lw-1896516341-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <button type="submit">Create</button>
    </form>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('footer');

$__html = app('livewire')->mount($__name, $__params, 'lw-1896516341-3', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>;
</div>
<?php /**PATH C:\OSPanel\BIZFULL2\resources\views/livewire/create-project.blade.php ENDPATH**/ ?>