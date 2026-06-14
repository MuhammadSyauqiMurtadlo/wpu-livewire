<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Users extends Component
{
    // public $title = 'Users Page Livewire';
    public function createUser()
    {
        // User::factory()->create();
        User::create([
            'name' => 'Muhammad Syauqi Murtadlo',
            'email' => 'syauqi@example.com',
            'password' => Hash::make('password'),
        ]);
    }

    public function render()
    {
        return view('livewire.users', [
            'title' => 'Users Page Livewire',
            'users' => User::all(),
        ]);
    }
}
