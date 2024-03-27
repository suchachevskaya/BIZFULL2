<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

use App\Livewire\CreateFAQ;
use App\Models\Reward;
use App\Models\Social;
use App\Models\FAQ;
use App\Models\Gallery;
use App\Models\Project;


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
    public $total_donations;
    public $projects;
    public $currentStep = 1;


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
            'total_donations' => $this->total_donations,


        ]);
        foreach ($this->gallery as $image) {
            $imageName = $project->id . '_' . uniqid() . '_' . microtime(true) . '.' . $image->extension();
            $image->storeAs('public/images', $imageName);

            Gallery::create([
                'project_id' => $project->id,
                'image' => $imageName,
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
        foreach ($this->_f_a_g as $FAQ) {
            FAQ::create([
                'project_id' => $project->id,
                'question' => $FAQ['question'],
                'answer' => $FAQ['answer'],
            ]);
        }

        return redirect()->route('notification-page')->with('message', 'The project has been created and is being processed.');
    }


    public function mount()
    {
        $this->gallery = [];
        $this->reward = [];
        $this->social = [['network' => 'facebook', 'link' => '']];
        $this->_f_a_g = [];
        $this->total_donations = 0.0;
        $this->category = 'technology';
    }

    public function increaseStep()
    {
        $this->currentStep++;

    }

    public function decreaseStep()
    {
        $this->currentStep--;
    }

}
