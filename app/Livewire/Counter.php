<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Folder;
use App\Models\Request;
use Illuminate\Support\Facades\Cache;

class Counter extends Component
{
    public $folders = [];
    public $person = '';

    public $activeSection = null;
    public $selectedContent = null;
    public $isClicked = false;

    public $name;
    public $email;
    public $message;
    public $showForm = false;

    public function mount()
    {
        $this->folders = Cache::remember('folders:list', now()->addHour(), function () {
            return Folder::query()
                ->select('id', 'title')
                ->get();
        });

        $this->person = Cache::remember('person', now()->addHour(), function () {
            return Person::query()
                ->first();
        });
    }

    public function setSection($folderId)
    {
        $folder = Cache::remember("folders:{$folderId}", now()->addHour(), function () use ($folderId) {
            return Folder::query()
                ->select('id', 'content')
                ->find($folderId);
        });

        if (! $folder) {
            $this->removeSection();

            return;
        }

        $this->activeSection = $folder->id;
        $this->selectedContent = $folder->content;
        $this->isClicked = true;
    }

    public function removeSection()
    {
        $this->activeSection = null;
        $this->selectedContent = null;
        $this->isClicked = false;
    }

    public function openForm()
    {
        $this->showForm = true;
    }

    public function hideForm()
    {
        $this->showForm = false;
    }

    public function submitForm()
    {
        // Validate form data
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        Request::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);
    
        $this->reset(['name', 'email', 'message']);

        $this->hideForm();

        session()->flash('message', 'Your message has been sent!');
    }


    
    public function render()
    {
        return view('livewire.counter',[
            'folders' => $this->folders,
        ]);
    }
}
