<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

// #[Layout('components.layouts.app')]
#[Title('Users Page')]
class Users extends Component
{
    public function render()
    {
        return view('livewire.users');
    }
}
