<?php

namespace App\Http\Livewire;

use App\Models\UserAdditionalData;
use Livewire\Component;

class SimpleForm extends Component
{
    public $name;
    public $email;
    public $message;
    public $userAdditionalData;
    public $userids;

    protected $rules = [
        'name' => 'required|max:20|unique:user_additional_data',
        'email' => 'required|email|unique:user_additional_data',
        'message' => 'required|max:1000',
    ];

    public function submit() {

        $validatedData = $this->validate();
        $userAdditionalData = new UserAdditionalData;
        $userAdditionalData->name = $validatedData['name'];
        $userAdditionalData->email = $validatedData['email'];
        $userAdditionalData->message = $validatedData['message'];
        $userAdditionalData->save();

        $this->name = '';
        $this->email = '';
        $this->message = '';

    }

    public function delete(){
        UserAdditionalData::whereIn('id', array_keys($this->userids))->delete();
    }


    public function render()
    {
        return view('livewire.simple-form');
    }
}
