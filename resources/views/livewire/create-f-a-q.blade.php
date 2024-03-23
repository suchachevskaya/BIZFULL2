<div>
    @foreach ($faqs as $index => $faq)
        <label for="faq{{ $index }}">Вопрос {{ $index + 1 }}:</label><br>
        <input type="text" id="question{{ $index }}" wire:model="faqs.{{ $index }}.question" placeholder="Введите вопрос {{ $index + 1 }}"><br>
        <label for="answer{{ $index }}">Ответ {{ $index + 1 }}:</label><br>
        <input type="text" id="answer{{ $index }}" wire:model="faqs.{{ $index }}.answer" placeholder="Введите ответ {{ $index + 1 }}"><br>
    @endforeach

    <button wire:click="addFaq">Добавить вопрос и ответ</button>
</div>
