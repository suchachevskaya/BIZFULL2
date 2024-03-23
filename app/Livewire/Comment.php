<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment as CommentModel;
use App\Models\Project;

class Comment extends Component
{
    public $comments;
    public $newComment;
    public $user;
    public $project;

    public function mount()
    {
        $this->comments = CommentModel::all();
        $this->user = Auth::user();
    }

    public function addComment()
    {
        $this->validate([
            'newComment' => 'required|min:3|max:500',
        ]);

        $newComment = CommentModel::create(['body' => $this->newComment]);
        $this->comments->prepend($newComment);
        $this->newComment = "";
    }

    public function render()
    {

        return view('livewire.comment', ['project' => $this->project]);
    }
}
