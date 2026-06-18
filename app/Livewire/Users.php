<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Users extends Component
{
    use WithFileUploads;

    #[Validate('required|string|min:3|max:255')]
    public $name = '';

    #[Validate('required|string|email:dns|max:255|unique:users')]
    public $email = '';

    #[Validate('required|string|min:8')]
    public $password = '';

    #[Validate('image|max:5120')]
    public $avatar = '';

    public function createNewUser()
    {
        $validated = $this->validate();
        if ($this->avatar) {
            $validated['avatar'] = $this->avatar->store('avatar', 'public');
        }
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'avatar' => $validated['avatar'],
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
