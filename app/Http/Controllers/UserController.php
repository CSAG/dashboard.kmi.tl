<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(30);
        return view('page.user.index', compact('users'));
    }

    public function store(RegisterRequest $request)
    {
        $users = new User();
        $users->fullname = $request->fullname;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->type = $request->type;
        $users->save();
        return redirect('user');
    }

    public function postUpdate(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->fullname = $request->fullname;
        $user->type = $request->type;
        $user->save();
        return redirect('user');
    }

    public function getDelete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return back();
    }

    public function getUpdate($id)
    {
        $user = User::findOrFail($id);
        return view('page.user.edit', compact('user'));
    }

}
