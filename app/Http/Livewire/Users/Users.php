<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use App\User;

class Users extends Component
{
    public function render()
    {
        return view('livewire.users.users',[
        	'users' => User::all()
        ]);
    }
}
