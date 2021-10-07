<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class ContactComponent extends Component
{
    public function render()
    {
        $data = [
            'page' => 'contact'
        ];
        return view('livewire.home.contact-component')->layout('layouts.base', compact('data'));
    }
}
