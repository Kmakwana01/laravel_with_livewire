<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LogoutButton extends Component
{

    public function logout()
    {
        Auth::guard('web')->logout();

        return redirect()->to('/')->with('message', 'Logged out successfully');
    }

    public function render()
    {
        return view('livewire.logout-button');
    }
}
