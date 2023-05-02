<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowForm extends Component
{
    public $title;

    public function render()
    {
        return view('livewire.show-form');
    }
}
