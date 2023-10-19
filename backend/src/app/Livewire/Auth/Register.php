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
        $this->validate();

        if (User::where('email', $this->email)->exists()) {
            $this->dispatch('toastify:error',message:'email already exists. login please.');
            return false;
        }

        try {

            DB::beginTransaction();

            $user = User::create([
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);

            $user->name = 'user#' . $user->id;
            $user->save();

            Auth::login($user);

            DB::commit();

            return redirect()->route('dashboard');
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th);
        }
    }

    public function render()
    {
        return view('livewire.auth.register')->layout('layouts.auth');
    }
}
