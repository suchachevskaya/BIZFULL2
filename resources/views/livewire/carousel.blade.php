<div>
    <div class="show-popular">
        <a wire:click="prev">
            <img src="img/left.png"/>
        </a>
        <div class="show-popular-artical">
            <div>
                <img class="show-popular-img" src="{{ $item['image'] }}"/>
            </div>

            <div class="article">
                <h2>{{ $item['title'] }}</h2>
                <p>{{ $item['description'] }}</p>
                <p> Price - {{ $item['price'] }} Duration - {{ $item['duration'] }} Instructor
                    - {{ $item['instructor'] }}</p>
                @auth
                    <a href="{{ url('/view-projects') }}" class="create-button">support</a>
                @else
                    <a href="{{ route('login') }}" class="create-button">support</a>
                @endauth
            </div>
        </div>
        <a wire:click="next">
            <img src="img/right.png"/>
        </a>
    </div>

    <div class="dot-wrapper">
        @foreach ($items as $i => $item)
            <img src="img/dot-{{ $i == $index ? 'd' : 'w' }}.png"/>
        @endforeach
    </div>
</div>
