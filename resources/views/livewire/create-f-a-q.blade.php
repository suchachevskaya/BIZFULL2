<div>
    @foreach ($faqs as $index => $faq)
        <label for="faq{{ $index }}">Question {{ $index + 1 }}:</label><br>
        <input type="text" id="question{{ $index }}" wire:model="faqs.{{ $index }}.question"
               placeholder="Enter a question{{ $index + 2 }}"><br>
        <label for="answer{{ $index }}">Answer {{ $index + 1 }}:</label><br>
        <input type="text" id="answer{{ $index }}" wire:model="faqs.{{ $index }}.answer"
               placeholder="Enter your answer {{ $index + 2 }}"><br>
    @endforeach

    <button wire:click="addFaq"> Add faq</button>
</div>
