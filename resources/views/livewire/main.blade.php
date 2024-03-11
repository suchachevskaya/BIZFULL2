<div class="container">
    <div class="header-container">

        <a class="logoContainer" href="{{ url('/welcome') }}">
            <div>
                <img class="image" src="{{ asset('img/image-lg.png') }}"/>
            </div>
            <h1>
                BIZFULL
            </h1>
        </a>
        <div class="header">
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/user/profile') }}" class="profile-button">Profile</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
    <div class="banner-container">
        <p class="title">Master the art of crowdfunding</p>
        <div class="button-container">
            <div>
                @auth
                    <a href="{{ url('/create-project') }}" class="start-button">Start a new project</a>
                @else
                    <a href="{{ route('login') }}" class="start-button">Start a new project</a>
                @endauth
            </div>
            <div>
                @auth
                    <a href="{{ url('/view-projects') }}" class="create-button">Сhoose your project</a>
                @else
                    <a href="{{ route('login') }}" class="create-button">Сhoose your project</a>
                @endauth
            </div>
        </div>
        <div class="meta-container">
            <div class="meta">
                <b>01. Availability</b>
                <p class="text-wrapper">
                    Receive funding from a wide audience who may be interested in your project, without having to go
                    through
                    traditional sources such as banks, investors or sponsors.
                </p>
            </div>
            <div class="meta">
                <b>02.Marketing</b>
                <p class="text-wrapper">
                    Spread the word about your project, create a connection with potential clients and get feedback from
                    them.
                </p>
            </div>
            <div class="meta">
                <b>03.Innovation</b>
                <p class="text-wrapper">
                    Develop new ideas, products and services that can be useful to the individual or society as a whole.
                </p>
            </div>

        </div>
    </div>

    <div class="benefits-container">
        <div class="text-benefits-wrapper ">
            <div>
                <div class="title title-blakc">Why choose us</div>
                <div class="">
                    <p class="">Find out the benefits of our crowdfunding platform</p>
                </div>
                <div class="">
                    <div class="icon-text-wrapper"><img src="img/image.svg"/>
                        <p>Reduces costs for marketing and advertising</p></div>
                    <div class="icon-text-wrapper"><img src="img/SVG.svg"/>
                        <p>Provides access to the international market and global audience</p></div>
                    <div class="icon-text-wrapper"><img src="img/SVG-4.svg"/>
                        <p>Financing without collateral</p></div>
                    <div class="icon-text-wrapper"><img src="img/SVG-5.svg"/>
                        <p>Helps to find fans and supporters of the project</p></div>
                    <div class="icon-text-wrapper"><img src="img/SVG-6.svg"/>
                        <p>Chance to implement projects that have social significance</p></div>

                </div>
                <div>
                    @auth
                        <a href="{{ url('/view-projects') }}" class="start-button"> Enroll now</a>
                    @else
                        <a href="{{ route('login') }}" class="start-button"> Enroll now</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="start-button"></a>
                        @endif
                    @endauth</div>

            </div>

        </div>
        <div class="img-benefits-wrapper ">
            <img class="rounded" src="img/image-1.png"/>
            <img class="rounded" src="img/image-2.png"/>
            <img class="rounded" src="img/image-3.png"/>
            <img class="rounded" src="img/image-0.png"/>
        </div>


    </div>

    <div class="show-wrapper">
        <div>
            <div class="title title-blakc">Meet our successful projects</div>
        </div>
        <div class="show-best-wrapper">
            <div class="show-best rounded">
                <img class="show-best-img" src="img/Giftster1.png"/>
                <b>Giftster</b>
                <p>Peter Beckett</p>
                <div>Give your loved ones joy with this app that helps you choose and send gifts. You can create a
                    profile of your recipient, indicate their interests and preferences, and order gifts in one click.
                    Giftster will also remind you of important dates and integrate with different delivery services.
                    Giftster is a convenient and fast way to make your friends and relatives happy.
                </div>
                <div>
                    <img src="img/in-icon.png"/>
                    <img src="img/insta-icon.png"/>
                    <img src="img/n-icon.png"/>
                    <img src="img/f-icon.png"/>
                </div>
            </div>
            <div class="show-best rounded">
                <img class="show-best-img" src="img/SmartPot.png"/>
                <b>SmartPot</b>
                <p>Ana Johnson</p>
                <div>Forget about the problems with caring for plants with this pot that takes care of them for you. It
                    connects to the app on your smartphone and shows you the state of your plant, as well as adjusts the
                    parameters of watering, fertilizing and lighting. SmartPot also has a built-in reservoir for water
                    and fertilizers that lasts for several weeks. SmartPot is a smart pot that makes your plant
                    happy.
                </div>
                <div>
                    <img src="img/in-icon.png"/>
                    <img src="img/insta-icon.png"/>
                    <img src="img/n-icon.png"/>
                    <img src="img/f-icon.png"/>
                </div>
            </div>
            <div class="show-best rounded">
                <img class="show-best-img" src="img/springy.png"/>
                <b>Springy</b>
                <p>Rebecca Evans</p>
                <div>Enjoy spring anytime of the year with this device that creates artificial spring in your home. You
                    can choose different spring scenarios, as well as adjust the temperature, humidity and lighting.
                    Springy will help you improve your mood, boost your immunity and reduce the symptoms of vitamin
                    deficiency. Springy is spring in a box that is always with you
                </div>
                <div>
                    <img src="img/in-icon.png"/>
                    <img src="img/insta-icon.png"/>
                    <img src="img/n-icon.png"/>
                    <img src="img/f-icon.png"/>
                </div>
            </div>
        </div>
    </div>

    <div class="show-popular-wrapper">
        <div class="title title-blakc">Popular projects</div>
        <p>Support our talented creators and make their dreams come true</p> <br>
        @livewire('carousel')

    </div>

    <div class="desc-process-wrapper">
        <div class="title title-blakc">
            Process of enrollment
        </div>
        <div class="text-desc-process-wrapper">
            <div class="text-desc-process ">
                <b class="title-blue">Registration</b>
                <p>You must fill out a questionnaire in which you describe your project, its purpose, amount, term and
                    rewards for backers.</p>

            </div>
            <div><img src="img/next1.png"/></div>

            <div class="text-desc-process">
                <b class="title-blue">Moderation</b>
                <p>Your project must be reviewed and approved by the platform administration.</p>
            </div>
            <div><img src="img/next1.png"/></div>
            <div class="text-desc-process">
                <b class="title-blue">Launch</b>
                <p>Your project becomes available to the public and you can start fundraising.</p>
            </div>
            <div><img src="img/next1.png"/></div>
            <div class="text-desc-process">
                <b class="title-blue">Completion</b>
                <p>If you have collected the required amount or more within the prescribed period, your project is
                    considered successful, and you receive money to your account, minus the platform commission. If you
                    have not collected the required amount, your project is considered unsuccessful, and the money is
                    returned to the backers..</p>
            </div>
            <div><img src="img/next1.png"/></div>
            <div class="text-desc-process">
                <b class="title-blue">Implementation</b>
                <p>You must fulfill your promises and implement your project, as well as send rewards to backers.</p>
            </div>
        </div>
    </div>
    <div class="show-popular-wrapper">
        <div class="title title-blue">Hear our participant say</div>
        <div class="show-popular">
            <img src="img/left.png"/>
            <div class="show-popular-artical">
                <div class="icon-reviews-text rounded">
                    <div class="icon-reviews">
                        <img src="img/face-1.png"/>
                        <b>Joselyn Simpson</b>
                    </div>
                    <p>
                        I couldn't be happier with the SEO course I took. The content was incredibly insightful, and the
                        instructors were engaging and knowledgeable. I'm so grateful for this  educational journey.
                    </p>
                </div>
                <div class="icon-reviews-text rounded">
                    <div class="icon-reviews">
                        <img src="img/face-2.png"/>
                        <b>Joselyn Simpson</b>
                    </div>
                    <p>
                        I couldn't be happier with the SEO course I took. The content was incredibly insightful, and the
                        instructors were engaging and knowledgeable. I'm so grateful for this  educational journey.
                    </p>
                </div>
                <div class="icon-reviews-text rounded">
                    <div class="icon-reviews">
                        <img src="img/face-3.png"/>
                        <b>Joselyn Simpson</b>
                    </div>
                    <p>
                        I couldn't be happier with the SEO course I took. The content was incredibly insightful, and the
                        instructors were engaging and knowledgeable. I'm so grateful for this  educational journey.
                    </p>
                </div>
            </div>
            <img src="img/right.png"/>
        </div>

    </div>
@livewire('footer');
</div>



