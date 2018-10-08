<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $users = $this->user->all();   
        
        return view('user.index', compact('users'));
    }

    public function show($id)
    {
        $user = $this->user->find($id);

        return view('user.show', compact('user'));
    }
}