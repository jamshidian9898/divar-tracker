<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Register extends Component
{
    #[Rule('required|email')]
    public $email;

    #[Rule('required|min:8')]
    public $password;
    #[Rule('required|min:8|same:password')]
    public $passwordConfirmation;

    public function register()
    {
        sleep(2);
        $this->validate();

        if (User::where('email', $this->email)->exists()) {
            return false;
        }

        try {

            DB::beginTransaction();
            $user = User::create([
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);

            Auth::login($user);
            DB::commit();

        } catch (\Throwable $th) {

            DB::rollBack();
        }
    }

    public function render()
    {
        return view('livewire.auth.register')->layout('layouts.auth');
    }
}
