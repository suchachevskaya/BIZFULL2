<div>
    @livewire('header')

    <div class="containerCreateForm">
        <form wire:submit.prevent="saveProject">
            @if ($currentStep == 1)
                {{--                <div class="marquee-container">--}}
                {{--                    <h3 class="marquee-text">Warrior of light, you stand on the threshold of great things! May every step fill you with strength and confidence.</h3>--}}
                {{--                </div>--}}
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
                <label for="title">Project Title:</label><br>
                <input type="text" wire:model="title" id="title" name="title" placeholder="Enter project title"><br>
                <label for="short_desc">Short Description:</label><br>
                <input type="text" wire:model="short_desc" id="short_desc" name="short_desc"
                       placeholder="Enter a brief description of the project"><br>

            @elseif ($currentStep == 2)
                {{--                <div class="marquee-container">--}}
                {{--                    <h3>Твоя идея – это искра, способная зажечь огонь в сердцах многих. Дай ей шанс стать пламенем!</h3>--}}
                {{--                </div>--}}

                <h2>Project Details</h2>
                <label for="description">Detailed Description:</label><br>
                <textarea wire:model="description" id="description" name="description"
                          placeholder="Enter an in-depth description"></textarea><br>
                <label for="deadline">Deadlines:</label> <br>
                <input type="date" wire:model="deadline" id="deadline">
                <label for="funding">Funding Amount:</label><br>
                <input type="number" wire:model="funding" id="funding" name="funding"
                       placeholder="Enter the required amount"><br>
            @elseif ($currentStep == 3)
                {{--                <div class="marquee-container">--}}
                {{--                    <h3>Твой проект обретает лицо! Пусть каждый загруженный образ будет ярким отражением твоей--}}
                {{--                        мечты.</h3>--}}
                {{--                </div>--}}

                <h2>Media</h2>
                <label for="attachment">Main Image:</label><br>
                <input type="file" wire:model="attachment" id="attachment" name="attachment"><br>
                <label for="gallery">Project Gallery:</label><br>
                <input type="file" wire:model="gallery" id="gallery" name="gallery" multiple
                       placeholder="Выберите файлы"><br>
                <label for="video">Video Presentation:</label><br>
                <input type="text" wire:model="video" id="video" name="video" placeholder="Insert a video link"><br>
            @elseif ($currentStep == 4)
                {{--                <div class="marquee-container">--}}
                {{--                    <h3>Твоя щедрость – ключ к успеху. Создай систему вознаграждений, которая превратит поддержку в--}}
                {{--                        праздник--}}
                {{--                        для каждого участника</h3>--}}
                {{--                </div>--}}
                <h2>Rewards for Sponsors</h2>
                <label for="reward1">Reward:</label><br>
                <input type="text" wire:model="reward.0.descriptionReward" id="reward1" name="reward1"
                       placeholder="Enter reward description"><br>
                <label for="reward1">Amount:</label><br>
                <input type="number" wire:model="reward.0.amount" id="amount1" name="amount1"
                       placeholder="Enter the required donation amount for the reward"><br>
                @livewire('create-reward')
            @elseif ($currentStep == 5)
                {{--                <div class="marquee-container">--}}
                {{--                    <h3>Расскажи миру свою историю. Пусть каждый узнает о человеке за этим великим начинанием.</h3>--}}
                {{--                </div>--}}

                <h2>Contact Information</h2>
                <label for="contact">Creator’s Name:</label><br>
                <input type="text" wire:model="contact" id="contact" name="contact" placeholder="Enter your name"><br>
                <label for="email">Email:</label><br>
                <input type="email" wire:model="email" id="email" name="email" placeholder="Enter your email"><br>
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
                @livewire('create-social')
            @elseif ($currentStep == 6)
                {{--                <div class="marquee-container">--}}
                {{--                    <h3>Последний рывок часто бывает самым трудным, но помни: именно он превращает мечты в реальность.--}}
                {{--                        Ты--}}
                {{--                        почти у цели!</h3>--}}
                {{--                </div>--}}

                <h2 for="faq">FAQ</h2><br>
                <label for="faq1">Question:</label><br>
                <input type="text" wire:model="_f_a_g.0.question" id="faq1" name="faq1" placeholder="Введите вопрос">
                <br>
                <label for="faq1"> Answer:</label><br>
                <input type="text" wire:model="_f_a_g.0.answer" id="faq1" name="faq1" placeholder="Введите ответ"><br>
                @livewire('create-f-a-q')
                <div class="createProjectButtonWrapper"><button class="createProjectButton" type="submit">Create project</button></div>
            @endif
        </form>
    </div>
    <div class="button-nav">
        @if ($currentStep > 1)
            <button wire:click="decreaseStep">Back</button>
        @endif

        @if ($currentStep < 6)
            <button wire:click="increaseStep">Next</button>
        @endif
    </div>


    @livewire('footer');
</div>
