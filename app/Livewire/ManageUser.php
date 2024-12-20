<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ManageUser extends Component
{
    public $showDeleteUserModal = false;

    public User $currentUser;

    public function mount(){
        $this->currentUser = new User();
    }

    public function confirmDelete(User $user){

        $this->currentUser = $user;

        $this->showDeleteUserModal = true;

    }
    public function delete(){
        $this->currentUser->delete();
        $this->showDeleteUserModal = false;
    }

    public function render()
    {
        return view('livewire.manage-user')
            ->with('users',User::all());
    }
}
