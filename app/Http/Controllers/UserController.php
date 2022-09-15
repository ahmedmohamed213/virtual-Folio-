<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UserCreateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {

        return view('Admin\user\create');
    }

    public function store(UserCreateRequest $request)
    {
        User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)

            ]
        );

        Session()->flash('done', 'user Was Created');

        return redirect()->back();
    }

    public function index()
    {
        $users = User::get();
        return view('Admin\users\index', compact('users'));
    }

    public function delete(Request $request)
    {

        $user = user::find($request->id);
        if ($user) {
            $user->delete();
            Session()->flash('done', 'user  Was Deleted!');
            return back();
        }

        return back()->withErrors(['user  Not Found']);
    }

    public function edit($id)
    {
        $user = user::find($id);


        return view('Admin.user.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request)
    {
        $user = user::find($request->id);


        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        Session()->flash('done', 'user  Updated !');

        return redirect(route('admin.user.index'));
    }
}