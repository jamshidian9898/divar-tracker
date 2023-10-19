<?php

namespace App\Livewire\Requests;

use App\Models\Request;
use App\Services\Requestor\Requestor;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Index extends Component
{
    #[Rule('required|url')]
    public $url;

    #[Rule('required|numeric')]
    public $min;

    #[Rule('required|numeric')]
    public $max;

    public function createRequest()
    {
        $this->validate();

        // use requestor service
        $response = (new Requestor)->create(auth()->user(), $this->url, $this->min, $this->max);
        
        if ($response['status']) {
            $this->dispatch('toastify:success', message: $response['message']);
            return;
        }
        $this->dispatch('toastify:error', message: $response['message']);
    }

    public function render()
    {
        return view('livewire.requests.index')
            ->layout('layouts.main');
    }
}
