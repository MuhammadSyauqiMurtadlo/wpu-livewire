<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    // public $title = 'Users Page Livewire';

    public function render()
    {
        return view('livewire.users', [
            'title' => 'Users Page Livewire',
            'users' => User::all(),
        ]);
    }
}
