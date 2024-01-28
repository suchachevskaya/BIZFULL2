<div>
    <form wire:submit.prevent="makePayment">
        <input type="number" wire:model="amount">
        <button type="submit"> Оплатить</button>
    </form>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
</div>

