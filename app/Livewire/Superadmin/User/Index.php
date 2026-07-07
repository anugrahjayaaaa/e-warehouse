<?php

namespace App\Livewire\Superadmin\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $paginate = '10';
    public $search = '';

    public $name = '';
    public $email = '';
    public $role = '';
    public $password = '';
    public $password_confirmation = '';

    // helper
    public $user_id = 0;
    public $user;

    public function render()
    {
        $data = [
            'title' => "Users Data",
            'users' => User::where('name', 'like', '%' . $this->search . '%')
                ->orWhere('email', 'like', '%' . $this->search . '%')
                ->orWhere('role', 'like', '%' . $this->search . '%')
                ->orderBy('role', 'asc')
                ->paginate($this->paginate)
        ];

        return view('livewire.superadmin.user.index', $data);
    }

    public function create()
    {
        $this->reset(
            [
                'name',
                'email',
                'role',
                'password',
                'password_confirmation'
            ]
        );
        $this->resetValidation();
    }

    public function edit($id)
    {
        $this->resetValidation();

        $user = User::findOrFail($id);

        $this->name = $user->name;
        $this->email = $user->email;
        $this->role = $user->role;

        $this->user_id = $user->id; // set to help with update function
    }

    public function store()
    {
        $validatedData = $this->validate($this->storeRules());

        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->role = $validatedData['role'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();

        // dispatch browser event to close modal
        $this->dispatch('closeCreateModal');
    }

    public function update($id)
    {
        $user = User::findOrFail($id);
        $this->user = $user;

        $validatedData = $this->validate($this->updateRole());

        $user->name = $validatedData['name'] ?? $user->name;
        $user->email = $validatedData['email'] ?? $user->email;
        $user->role = $validatedData['role'] ?? $user->role;

        if (!empty($validatedData['password'])) {
            $user->password = Hash::make($validatedData['password']);
        }

        $user->save();

        // dispatch browser event to close modal
        $this->dispatch('closeUpdateModal');
    }

    // helper functions

    public function storeRules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'role' => [
                'required',
                Rule::in(['Super Admin', 'Admin']),
            ],
            'password' => ['required', 'string', 'min:8'],
            'password_confirmation' => ['required', 'same:password'],
        ];
    }

    public function updateRole(): array
    {
        return [
            'name' => ['sometimes', 'string', 'max:255'],
            'email' => [
                'sometimes',
                'email',
                Rule::unique('users')->ignore($this->user),
            ],
            'password' => [
                'nullable',
                'string',
                'min:8',
                Password::defaults(),
            ],
            'password_confirmation' => ['sometimes', 'same:password'],
        ];
    }
}
