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

    public function mount(Project $project)
    {
        $this->project = $project;
        $this->comments = $this->project->comments;
        $this->user = Auth::user();
    }

    public function addComment()
    {
        $this->validate([
            'newComment' => 'required|min:3|max:500',
        ]);

        $newComment = CommentModel::create([
            'body' => $this->newComment,
            'project_id' => $this->project->id,
        ]);
        $this->comments->prepend($newComment);
        $this->newComment = "";
    }
    public function deleteComment($id){
        $comment=\App\Models\Comment::find($id); if ($comment) {
            $comment->delete();
            // Обновляем список комментариев после удаления
            $this->comments = $this->project->comments;
        } else {
            // Комментарий не найден
        }

    }

    public function render()
    {
        return view('livewire.comment', ['project' => $this->project]);
    }
}
