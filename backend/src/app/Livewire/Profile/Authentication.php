<?php

namespace App\Livewire\Profile;

use Livewire\Component;

class Authentication extends Component
{
    public function render()
    {
        return view('livewire.profile.authentication')
        ->layout('layouts.main');
    }
}
