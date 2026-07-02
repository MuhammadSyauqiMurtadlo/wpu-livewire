<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('About Page')]
class About extends Component
{
    public function render()
    {
        return <<<'HTML'
            <div class="flex flex-col items-center justify-center min-h-screen py-2">
                <h1 class="text-3xl font-bold mb-4">Welcome to the About Page</h1>
                <p class="text-lg text-gray-600">This is the about page of the WPU Livewire application.</p>
            </div>

        HTML;
    }
}
