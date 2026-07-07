<?php

namespace App\Livewire\Superadmin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $paginate = '10';
    public $search = '';

    public function render()
    {
        $users = [
            'users' => User::where('name', 'like', '%' . $this->search . '%')
                ->orWhere('email', 'like', '%' . $this->search . '%')
                ->orWhere('role', 'like', '%' . $this->search . '%')
                ->orderBy('role', 'asc')
                ->paginate($this->paginate)
        ];

        return view('livewire.superadmin.user.index', $users);
    }
}
