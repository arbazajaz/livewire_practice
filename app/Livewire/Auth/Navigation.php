<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Navigation extends Component
{
    public $name='Arbaz';

    public function changeName(){
        $this->name="Arbaz AJaz";
    }
    public function render()
    {
        return view('livewire.auth.navigation');
    }
}
