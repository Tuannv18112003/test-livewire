<?php

namespace App\Livewire\Admin\Users;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

class CreateUsers extends Component
{

    #[Rule('required|min:3')]
    public $username = '';

    #[Rule('required|email|unique:users')]
    public $email = '';

    #[Rule('required|integer|max:10')]
    public $phone = '';

    #[Rule('required')]
    public $address = '';

    #[Rule('required')]
    public $image = '';

    public function save() {
        $this->validate();
    }

    #[Title('Thêm tài khoản')] 
    public function render()
    {
        return view('livewire.admin.users.create-users');
    }
}
