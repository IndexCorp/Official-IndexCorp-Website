<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class TeamComponent extends Component
{
    public function render()
    {
        $data = [
            'page' => 'team'
        ];
        return view('livewire.home.team-component')->layout('layouts.base', compact('data'));
    }
}
