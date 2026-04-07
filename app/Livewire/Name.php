<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Person;
use Illuminate\Support\Facades\Cache;

class Name extends Component
{
    public $person;

    public function mount()
    {
        $this->person = Cache::remember('person', now()->addHour(), function () {
            return Person::query()
                ->first();
        });
    }
    public function render()
    {
        return view('livewire.name');
    }
}
