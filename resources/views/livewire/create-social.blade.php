<div>
    @foreach ($socials as $index => $social)
        <label for="social{{ $index }}">Social network {{ $index + 2 }}:</label><br>
        <select id="social{{ $index }}" name="social{{ $index }}">
            <option value="facebook">Facebook</option>
            <option value="twitter">Twitter</option>
            <option value="instagram">Instagram</option>
        </select><br>
        <label for="link{{ $index }}">Link {{ $index + 2}}:</label><br>
        <input type="text" id="link{{ $index }}" wire:model="socials.{{ $index }}.link"
               placeholder="Enter your link {{ $index + 2 }}"><br>
    @endforeach

    <button wire:click="addSocial"> Add social network</button>
</div>
