<?php

namespace App\Livewire\Utils;

use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserInfoShort extends Component
{

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }

    public function render()
    {
        return view('livewire.utils.user-info-short');
    }
}
