<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class BasicModal extends Component
{
    public $name;

    public $email;


    public $isOpen = false;

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.basic-modal')
            ->with('users',User::all());
    }
}
