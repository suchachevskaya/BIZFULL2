<div class="project-payment-container">
    <form class="project-payment" wire:submit.prevent="makePayment">
        <input type="number" wire:model="amount" PLACEHOLDER="Enter the donation amount">
        <button type="submit">Support</button>
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

