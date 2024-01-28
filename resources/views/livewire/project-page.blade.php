<div>
    <h1>{{ $project->title }}</h1>
    <p>{{ $project->description }}</p>
    <p>Категория: {{ $project->category }}</p>
    <p>Статус: {{ $project->status }}</p>
    <p>Срок выполнения: {{ $project->deadline }}</p>
    @livewire('payment-process', ['project' => $project])
</div>
