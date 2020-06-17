<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Test extends Component
{
    use WithFileUploads;

    public $files = [];

    public function render()
    {
        return view('livewire.test');
    }

    public function removeFile($key) {
        unset($this->files[$key]);
    }
}
