<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Login extends Component
{
    #[Rule(['required', 'email'])]
    public $email;

    #[Rule(['required', 'min:8'])]
    public $password;

    public $rememberMe = false;

    public function login()
    {
        $this->validate();

        if (Auth::attempt(array('email' => $this->email, 'password' => $this->password), $this->rememberMe))
            return redirect()->route('dashboard');

        session()->flash('error', 'email and password are wrong.');
    }

    public function render()
    {
        return view('livewire.auth.login')->layout('layouts.auth');
    }
}
