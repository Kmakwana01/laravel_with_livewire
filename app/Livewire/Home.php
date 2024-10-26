<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout; 

#[Layout('components.layouts.home')] 
class Home extends Component
{
    public function render()
    {
        // $this->js('console.log("hello")');
        return view('livewire.home'); // Ensure this view exists
    }
}
