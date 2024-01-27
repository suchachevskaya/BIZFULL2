<div>
    <button wire:click="changeStatus('resolved')">
        resolved
    </button>
    @if(session()->has('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <button wire:click="changeStatus('rejected')">
        rejected
    </button>
    @if(session()->has('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
</div>
