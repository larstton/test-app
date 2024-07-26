<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Attributes\On;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class Screen extends Component
{
    public $screen = 1;
    public $books;
    public $search;
    public function render()
    {
        if($this->screen == 1){
            $this->books = Book::when(filled($this->search), function($query){
                $query->where('title', 'like',  '%' . $this->search . '%')
                    ->orWhere('notes', 'like',  '%' . $this->search . '%')
                    ->orWhere('id', 'like',  '%' . $this->search . '%');
            })->orderBy('name')->get();
        }

        return view('livewire.screen');
    }

    #[On('change-screen-listener')]
    public function changeScreen($screen)
    {
        $this->screen = $screen;
    }

}
