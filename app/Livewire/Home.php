<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout; 

class Home extends Component
{
    public function render()
    {
        // $this->js('console.log("hello")');
        return view('livewire.home'); // Ensure this view exists
    }
}
