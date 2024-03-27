<div class="rating-container">
    <div>
        @if($existingStar)
            <img class="img-rating" wire:click="rate(1)" src="{{ asset('img/icon/star.png') }}" alt="Star">
        @else
            <img class="img-rating" wire:click="rate(1)" src="{{ asset('img/icon/dstar.png') }}" alt="Empty Star">
        @endif
    </div>

        <h2> {{ $rating }}</h2>
</div>
