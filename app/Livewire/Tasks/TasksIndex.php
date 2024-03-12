<?php

namespace App\Livewire\Tasks;

use Livewire\Component;

class TasksIndex extends Component
{
    public $title;
    public $slug;
    public $description;
    public $status;
    public $priority;
    public $deadline;

    public function save()
    {
        auth()->user()->tasks()->create(['title' => $this->title, 'slug' => $this->slug, 'description' => $this->description, 'status' => $this->status, 'priority' => $this->priority, 'deadline' => $this->deadline]);
        $this->reset();
        session()->flash('message', 'Task has been Added successfully');
    }
    public function render()
    {
        return view('livewire.tasks.tasks-index')->layout('layouts.app');
    }
}
