<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $data = [
            'page'  =>  'home'
        ];
        return view('livewire.home.home-component')->layout('layouts.base', compact('data'));
    }
}
