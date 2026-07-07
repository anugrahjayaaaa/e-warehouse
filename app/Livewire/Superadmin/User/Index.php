<?php

namespace App\Livewire\Superadmin\User;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $users = [
            'users' => User::orderBy('role', 'asc')->get()
        ];
    
    return view('livewire.superadmin.user.index', $users);
    }
}
