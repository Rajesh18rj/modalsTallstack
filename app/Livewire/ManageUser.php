<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Work;
use Livewire\Component;

class ManageUser extends Component
{
    public $showDeleteWorkModal = false;

    public $vid;
    public $name;
    public $email;
    public $phone;
    public $job_postion;

    public bool $showEditWorkModal = false;

    public Work $currentWork;

    public function mount(){
        $this->currentWork = new Work();
    }

    public function edit($id): void{
        $this->getObj($id);
        $this->showEditWorkModal = true;
    }

    public function getObj($id)
    {
        if ($id) {
            $obj = Work::find($id);
            $this->vid  = $obj->id;
            $this->name = $obj->name;
            $this->email = $obj->email;
            $this->phone = $obj->phone;
            $this->job_postion = $obj->job_postion;
            $this->showEditWorkModal = true;
            return $obj;
        }
        return null;
    }

    public function confirmDelete(Work $work){

        $this->currentWork = $work;

        $this->showDeleteWorkModal = true;

    }
    public function delete(){
        $this->currentWork->delete();
        $this->showDeleteWorkModal = false;
    }

    public function render()
    {
        return view('livewire.manage-user')
            ->with('works',Work::all());
    }
}
