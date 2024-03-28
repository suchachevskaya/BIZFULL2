<div>
    @foreach ($rewards as $index => $reward)
        <label for="reward{{ $index }}">Reward {{ $index + 2 }}:</label><br>
        <input type="text" id="reward{{ $index }}" wire:model="rewards.{{ $index }}.description" placeholder="
Enter reward description {{ $index + 2 }}"><br>
        <input type="number" id="amount{{ $index }}" wire:model="rewards.{{ $index }}.amount" placeholder="Enter the required donation amount for the reward {{ $index + 2 }}"><br>
    @endforeach
        <div class="createProjectButtonWrapper" >
            <button class="addButton" wire:click="addReward">Add reward</button>
        </div>

</div>
