<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Work;
use Livewire\Component;

class BasicModal extends Component
{
    public $name;
    public $email;
    public $phone;
    public $job_position;
    public $isOpen = false;

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function getSave()
    {
        Work::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'job_position' => $this->job_position,
        ]);

        return 'Saved successfully'; // Return the message here
    }

    public function save()
    {
        $this->getSave(); // Save the data
        $this->closeModal(); // Close the modal
        session()->flash('message', 'User created successfully!'); // Flash success message
    }


    public function render()
    {
        return view('livewire.basic-modal')
            ->with('works', Work::all());
    }
}
