<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class TaskForm extends Form
{
    public $title;
    public $slug;
    public $description;
    public $status;
    public $priority;
    public $deadline;

    protected $rules = [
        'title' => 'required',
        'slug' => 'required',
        'description' => 'required',
        'status' => 'required',
        'priority' => 'required',
        'deadline' => 'required',
    ];

    public function createTask()
    {
        auth()->user()->tasks()->create($this->all());
    }
}
