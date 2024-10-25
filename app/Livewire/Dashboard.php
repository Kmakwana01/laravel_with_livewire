<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public $count = 1;
    public $todos = [];
    public $todo;
 
    public function increment()
    {
        $this->js(
            "console.log('increement')"
        );
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }

    public function add()
    {
        $this->todos[] = $this->todo;
        $this->todo = '';
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
