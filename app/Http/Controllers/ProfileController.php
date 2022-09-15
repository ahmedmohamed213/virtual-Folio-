<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        $profiles = Profile::first();
        return view('Admin.profile.edit', compact('profiles'));
    }

    public function update(Request $request)
    {
        $profiles = Profile::first();

        $profiles->update([
            'title' => $request->title,
            'body' =>  $request->body,
            'year' =>  $request->year,
            'type' =>  $request->type
        ]);
        Session()->flash('done', 'profile  Updated !');

        return back();
    }
}