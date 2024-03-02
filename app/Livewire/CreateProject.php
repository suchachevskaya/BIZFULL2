<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\project;
use App\Livewire\CreateFAQ;



class CreateProject extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $category;
    public $status;
    public $attachment;
    public $deadline;
    public $contact;
    public $user_id;
    public $status_change_by_id;
    public $video;
    public $email;
    public $phone;
    public $social;
    public $image;
    public $project;
    public $amount;
    public $descriptionReward;
    public $short_desc;
    public $funding;
    public $gallery;
    public $reward;
    public $_f_a_g;


    public function saveProject()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
        ]);
        $attachmentName = null;
        if ($this->attachment) {
            $attachmentName = time() . '.' . $this->attachment->extension();
            $this->attachment->storeAs('public/images', $attachmentName);
        }
        $project = Project::create([
            'title' => $this->title,
            'description' => $this->description,
            'category' => $this->category,
            'status' => 'open',
            'attachment' => $attachmentName,
            'deadline' => $this->deadline,
            'contact' => $this->contact,
            'user_id' => Auth::id(),
            'status_change_by_id' => $this->status_change_by_id,
            'short_desc' => $this->short_desc,
            'funding' => $this->funding,
            'video' => $this->video,
            'email' => $this->email,
            'phone' => $this->phone,
            'social' => $this->social,


        ]);
        foreach ($this->gallery as $image) {
            Gallery::create([
                'project_id' => $project->id,
                'image' => $image,

            ]);
        }
        foreach ($this->reward as $reward) {
            Reward::create([
                'project_id' => $project->id,
                'amount' => $reward['amount'],
                'descriptionReward' => $reward['descriptionReward'],
            ]);
        }
        foreach ($this->social as $social) {
            Social::create([
                'project_id' => $project->id,
                'network' => $social['network'],
                'link' => $social['link'],
            ]);
        }
        foreach ($this->_f_a_g as $_f_a_g) {
            FAQ::create([
                'project_id' => $project->id,
                'network' => $_f_a_g['question'],
                'link' => $_f_a_g['answer'],
            ]);
        }
        $this->resetFields();
    }

    public function resetFields()
    {
        $this->title = '';
        $this->description = '';
        $this->category = '';
        $this->status = '';
        $this->attachment = null;
        $this->deadline = null;
        $this->contact = '';
        $this->user_id = null;
        $this->status_change_by_id = null;
        $this->video = '';
        $this->email = '';
        $this->phone = null;
        $this->social = [];
        $this->image = null;
        $this->project = null;
        $this->amount = null;
        $this->descriptionReward = '';
        $this->short_desc = '';
        $this->funding = null;
        $this->gallery = [];
        $this->reward = [];
        $this->_f_a_g = [];
    }

    public function mount()
    {
        $this->gallery = [];
        $this->reward = [];
        $this->social = [];
        $this->_f_a_g = [];
    }
}
