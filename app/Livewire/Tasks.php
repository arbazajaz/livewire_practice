<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Tasks extends Component
{
    public $tasks = [];
 
    public $task = 'task';
 
    public function mount()
    {
        $this->tasks = ['1 task', '2 tasks', '3 tasks']; 
    }
    public function add()
    {
        $this->tasks[]=$this->task;
        $this->task='';
    }
    public function render()
    {
        return view('livewire.tasks');
    }
}
