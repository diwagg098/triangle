<?php


namespace App\Http\Livewire;

use Livewire\Component;

class Triangle extends Component
{
    public $height;
    public $number;

    public function render()
    {
        return view('livewire.triangle');
    }

    public function generateTriangle()
    {
        $this->validate([
            'height' => 'required|integer',
        ]);
    }
}
