<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ResisterUser extends Component
{
    public function render()
    {
        return view('livewire.resister-user')->layout('layouts.guest');
    }
}
