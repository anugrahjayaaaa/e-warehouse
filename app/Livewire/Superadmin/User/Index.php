<?php

namespace App\Livewire\Superadmin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $paginate = '10';
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $users = [
            'users' => User::orderBy('role', 'asc')->paginate($this->paginate)
        ];

        return view('livewire.superadmin.user.index', $users);
    }
}
