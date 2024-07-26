<?php

namespace App\Livewire;

use Livewire\Component;

class FrontPage extends Component
{
    public function render()
    {
        return view('livewire.front-page')
            ->layout('layouts.app');
    }

    public function changeScreen($screen)
    {
        $this->dispatch('change-screen-listener', $screen);
    }
}
