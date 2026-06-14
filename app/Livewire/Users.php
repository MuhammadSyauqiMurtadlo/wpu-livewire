<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Users extends Component
{
    public $name;

    public $email;

    public $password;

    public function createNewUser()
    {
        // User::factory()->create();
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.users', [
            'title' => 'Users Page Livewire',
            'users' => User::all(),
        ]);
    }
}
