<div>
    @foreach ($rewards as $index => $reward)
        <label for="reward{{ $index }}">Награда {{ $index + 1 }}:</label><br>
        <input type="text" id="reward{{ $index }}" wire:model="rewards.{{ $index }}.description" placeholder="Введите описание награды {{ $index + 1 }}"><br>
        <input type="number" id="amount{{ $index }}" wire:model="rewards.{{ $index }}.amount" placeholder="Введите необходимую сумму пожертвований для награды {{ $index + 1 }}"><br>
    @endforeach

    <button wire:click="addReward">Добавить награду</button>
</div>
