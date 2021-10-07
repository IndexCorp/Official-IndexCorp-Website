<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class ServicesComponent extends Component
{
    public function render()
    {
        $data = [
            'page' => 'services'
        ];
        return view('livewire.home.services-component')->layout('layouts.base', compact('data'));
    }
}
