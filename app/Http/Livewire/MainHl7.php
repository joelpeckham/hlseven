<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MainHl7 extends Component
{
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.main-hl7');
    }
}
