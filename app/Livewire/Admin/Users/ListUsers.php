<?php

namespace App\Livewire\Admin\Users;

use Livewire\Component;
use Livewire\Attributes\Title;

class ListUsers extends Component
{
    public function placeholder()
    {
        return <<<'HTML'
        <div>
            <!-- Loading spinner... -->
            <svg>...</svg>
        </div>
        HTML;
    }

    #[Title('Danh sách tài khoản')] 
    public function render()
    {
        return view('livewire.admin.users.list-users');
    }
}
