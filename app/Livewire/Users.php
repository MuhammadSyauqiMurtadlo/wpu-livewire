<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Users extends Component
{
    #[Validate('required|string|min:3|max:255')]
    public $name = '';

    #[Validate('required|string|email:dns|max:255|unique:users')]
    public $email = '';

    #[Validate('required|string|min:8')]
    public $password = '';

    public function createNewUser()
    {
        // User::factory()->create();
        // $validated = $this->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:8',
        // ]);

        $this->validate();
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->reset();
        session()->flash('message', 'User created successfully.');
    }

    public function render()
    {
        return view('livewire.users', [
            'title' => 'Users Page Livewire',
            'users' => User::all(),
        ]);
    }
}
