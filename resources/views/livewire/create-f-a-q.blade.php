<div>
    @foreach ($faqs as $index => $faq)
        <label for="faq{{ $index }}">Вопрос {{ $index + 1 }}:</label><br>
        <input type="text" id="amount{{ $index }}" wire:model="faqs.{{ $index }}.amount" placeholder="Введите вопрос {{ $index + 1 }}"><br>
        <label for="faq{{ $index }}">Ответ {{ $index + 1 }}:</label><br>
        <input type="text" id="faq{{ $index }}" wire:model="faqs.{{ $index }}.description" placeholder="Введите ответ {{ $index + 1 }}"><br>
    @endforeach

    <button wire:click="addFaq">Добавить вопрос и ответ</button>
</div>
