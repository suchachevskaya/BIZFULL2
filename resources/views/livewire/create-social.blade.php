<div>
    @foreach ($socials as $index => $social)
        <label for="social{{ $index }}">Социальная сеть {{ $index + 1 }}:</label><br>
        <select id="social{{ $index }}" name="social{{ $index }}">
            <option value="facebook">Facebook</option>
            <option value="twitter">Twitter</option>
            <option value="instagram">Instagram</option>
        </select><br>
        <label for="link{{ $index }}">Ссылка {{ $index + 1 }}:</label><br>
        <input type="text" id="link{{ $index }}" wire:model="socials.{{ $index }}.link" placeholder="Введите вашу ссылку {{ $index + 1 }}"><br>
    @endforeach

    <button wire:click="addSocial">Добавить социальную сеть</button>
</div>
