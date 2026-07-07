<?php

namespace App\Livewire\Superadmin\User;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $paginate = '10';

    public function render()
    {
        $users = [
            'users' => User::orderBy('role', 'asc')->paginate($this->paginate)
        ];

        return view('livewire.superadmin.user.index', $users);
    }
}
