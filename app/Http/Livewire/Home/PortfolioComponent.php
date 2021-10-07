<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class PortfolioComponent extends Component
{
    public function render()
    {
        $data = [
            'page' => 'portfolio'
        ];
        return view('livewire.home.portfolio-component')->layout('layouts.base', compact('data'));
    }
}
