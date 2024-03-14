<?php

namespace App\Livewire\Tasks;

use App\Livewire\Forms\TaskForm;
use Livewire\Component;
use Livewire\Attributes\Rule;

class TasksIndex extends Component
{
   public TaskForm $form;

    public function save()
    {
        $this->validate();
        $this->form->createTask();
        $this->form->reset();
        session()->flash('message', 'Task has been Added successfully');

        // ['title' => $this->title, 'slug' => $this->slug, 'description' => $this->description, 'status' => $this->status, 'priority' => $this->priority, 'deadline' => $this->deadline]
    }
    public function render()
    {
        return view('livewire.tasks.tasks-index')->layout('layouts.app');
    }
}
