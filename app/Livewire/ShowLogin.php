<?php

namespace ftsda3\auths\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;


class ShowLogin extends Component
{
    public $Data = [
        [
            "email" => "damonkert@gmail.com",
            "passsword" => "123456"
        ]
    ];
    public $email = '';
    public $password_2 = '';

    protected $rules = [
        'password_2' => 'required',
        'email' => 'required|email',
    ];

    protected $messages = [
        'email.required' => 'The Email Address cannot be empty.',
        'email.email' => 'The Email Address format is not valid.',
        'password_2.required' => 'The password cannot be empty'
    ];

    protected $validationAttributes = [
        'email' => 'email',
        'password_2' => 'password_2'
    ];

    public function HandleSubmit()
    {
        $validatedData = $this->validate();

        if ($validatedData['email'] !== "") {
            if ($this->Data[0]['email'] !== $this->email) {
                $this->addError('email', 'Incorrect Email');
            }
        }
        if ($validatedData['password_2'] !== "") {
            if ($this->Data[0]['passsword'] !== $validatedData['password_2']) {
                $this->addError('password_2', 'Incorrect Password');
            }
        }
    }
    public function render()
    {
        return view('livewire.show-login');
    }
}
