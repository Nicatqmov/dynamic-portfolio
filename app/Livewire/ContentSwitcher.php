<?php

namespace App\Http\Livewire;

use Livewire\Component;
class ContentSwitcher extends Component
{
    public $activeSection = false;

    public function setSection($section)
    {
        $this->activeSection = $section;
    }

    public function render()
    {
        return view('livewire.content-switcher');
    }
}