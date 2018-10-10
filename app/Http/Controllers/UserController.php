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

    public function edit($id)
    {
        $user = $this->user->find($id);

        return view('user.edit', compact('user'));
    }

    public function update($user, $id)
    {
        $this->user->find($id)->update($user);

        return $this->redirect()->route('users.index'); 
    }
}