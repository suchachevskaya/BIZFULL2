<div>
    <select wire:model="status">
        <option value="all">All</option>
        <option value="open">Open</option>
        <option value="resolved">Resolved</option>
        <option value="rejected">Rejected</option>
    </select>

    @foreach ($projects as $project)
        <!-- Отображение проекта -->
    @endforeach
</div>
