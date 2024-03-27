<div class="comment-section">

    <form wire:submit.prevent="addComment" class="comment-form">
        <input type="text" wire:model="newComment" class="comment-input" placeholder="Express an opinion">
        <button type="submit" class="comment-button">Сomment</button>
    </form>

    <ul class="comments-list">
        @forelse($comments as $comment)
            <div class="comment-item">
                <div>
                    <div class="user-name">{{ $user->name }}
                        @if(auth()->user()->hasRole('admin'))
                            (ID: {{ $user->id }})
                        @endif
                    </div>
                    <div class="comment-date">{{ $comment->created_at->setTimezone('Europe/Minsk')->format('d.m.Y H:i') }}</div>

                    <div class="comment-body">{{ $comment->body }}</div>
                </div>
                @if(auth()->user()->hasRole('admin'))
                    <div class="deleteComment" wire:click="deleteComment({{$comment->id}})">Delete</div>
                @endif
            </div>
        @empty
            <p>There are no comments yet. Be the first</p>
        @endforelse

    </ul>
</div>
