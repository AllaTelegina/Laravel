<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Note;

class NoteComponent extends Component
{
    public $notes;

    public function mount()
    {
        $this->notes = Note::all();
    }

    public function submitForm()
    {
        // Логика отправки формы
        $this->dispatchBrowserEvent('show-dialog');
    }

    public function render()
    {
        return view('livewire.note-component');
    }
}
