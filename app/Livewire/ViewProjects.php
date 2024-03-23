<?php

namespace App\Livewire;


use Livewire\Component;
use Livewire\Pagination;
use Livewire\WithPagination;
use App\Models\Project;

class ViewProjects extends Component
{
    public $fundingFilter = 100000;
    public $deadline=2030;
    public $projectStatus=null;
    public $category=null;
    public $order='newToOld';
    protected $listeners = ['projectDeleted' => 'render'];

    public function applyFilter(){}
    public function resetFilters()
    {
        $this->fundingFilter = 1000000;
        $this->deadline = 2030;
        $this->projectStatus = null;
        $this->category = null;
        $this->order = 'newToOld';
    }

    public function render()
    {if (auth()->user()->hasRole('admin')) {
        \Log::info('User is an admin');
        $projects = Project::query();

        if ($this->fundingFilter) {
            $projects = $projects->where('funding', '<=', $this->fundingFilter);
        }

        if ($this->deadline) {
            $projects = $projects->whereYear('deadline','<=', $this->deadline);
        }

        if ($this->projectStatus) {
            $projects = $projects->where('status', $this->projectStatus);
        }

        if ($this->category) {
            $projects = $projects->where('category', $this->category);
        }

        if ($this->order) {
            $orderDirection = $this->order == 'newToOld' ? 'desc' : 'asc';
            $projects = $projects->orderBy('created_at', $orderDirection);
        }

        return view('livewire.view-projects', [
            'projects' => $projects->paginate(15),
        ]);
    }}
}
