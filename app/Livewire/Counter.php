<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Folder;
use App\Models\Request;

class Counter extends Component
{
    public $folders;

    public $activeSection = 'default';
    public $isClicked= false;


    public $name;
    public $email;
    public $message;
    public $showForm;







    public function mount()
    {
        $this->folders = Folder::all();
    }

    public function setSection($section)
    {
        $this->activeSection = $section;
        $this->isClicked= true;

    }

    public function removeSection()
    {
        $this->activeSection = 'default';
        $this->isClicked= false;
    }


    public function showForm()
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

        // Handle form submission (e.g., save to database or send email)

        Request::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);
    
        // Clear form fields
        $this->reset(['name', 'email', 'message']);

        // Hide the form
        $this->hideForm();

        // Optionally, show a success message
        session()->flash('message', 'Your message has been sent!');
    }


    
    public function render()
    {
        return view('livewire.counter',[
            'folders' => $this->folders,
        ]);
    }
}
