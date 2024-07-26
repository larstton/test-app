<?php

namespace App\Livewire;

use Livewire\Component;

class ColoursGrid extends Component
{
    public $grid = [];

    public function mount()
    {
        // Initialize the grid with random red and blue squares
        $this->grid = $this->initializeGrid();
    }

    public function toggleSquare($x, $y)
    {
        // Call the backend to get the new grid state
        $this->grid = $this->getNewGridState($x, $y);
    }

    public function render()
    {
        return view('livewire.colours-grid');
    }

    private function initializeGrid()
    {
        $grid = [];
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                $grid[$i][$j] = rand(0, 1) ? 'red' : 'blue';
            }
        }
        return $grid;
    }

    private function getNewGridState($x, $y)
    {
        // Simulate backend processing
        $color = $this->grid[$x][$y];
        $newColor = $color == 'red' ? 'blue' : 'red';

        $directions = [
            [-1, 0], [1, 0], [0, -1], [0, 1]
        ];

        foreach ($directions as $direction) {
            $dx = $x + $direction[0];
            $dy = $y + $direction[1];
            if ($dx >= 0 && $dx < 3 && $dy >= 0 && $dy < 3) {
                if ($this->grid[$dx][$dy] == $color) {
                    $this->grid[$dx][$dy] = $newColor;
                }
            }
        }

        $this->grid[$x][$y] = $newColor;

        return $this->grid;
    }
}
