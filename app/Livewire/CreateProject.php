<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\project;



class CreateProject extends Component
{

    public $title;
    public $description;
    public $category;
    public $status;
    public $attachment;
    public $deadline;
    public $contact;
    public $user_id;
    public $status_change_by_id;

    public function saveProject()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'category' =>'required',
        ]);
        project::create([
            'title' => $this->title,
            'description' => $this->description,
            'category' => $this->category,
            'status' => 'open',
            'attachment' => $this->attachment,
            'deadline' => $this->deadline,
            'contact' => $this->contact,
            'user_id' => Auth::id(),
            'status_change_by_id' => $this->status_change_by_id,

        ]);
        $this->resetFields();
    }
    private function  resetFields(){
        $this->title='';
            $this->description='';
            $this->status='';
            $this->attachment='';
            $this->deadline='';
            $this->contact='';
            $this->user_id='';
            $this->status_change_by_id='';
    }

    public function render()
    {
        return view('livewire.create-project');
    }
}
