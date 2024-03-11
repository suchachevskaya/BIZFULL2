<div >
    <div class="show-popular">
    <a wire:click="prev">
        <img src="img/left.png"/>
    </a>
    <div class="show-popular-artical">
        <div>
            <img class="show-popular-img" src="{{ $item['image'] }}"/>
        </div>

        <div class="article">
            <p>{{ $item['title'] }}</p>
            <p>{{ $item['description'] }}</p>
            <p> Price - {{ $item['price'] }} Duration - {{ $item['duration'] }} Instructor - {{ $item['instructor'] }}</p>
            <p>support</p>
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
