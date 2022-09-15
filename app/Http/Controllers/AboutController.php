<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function edit()
    {
        $about = About::first();


        return view('Admin.about.edit', compact('about'));
    }

    public function update(Request $request)
    {

        if ($request->hasFile('image')) {
            $imageName = time() . $request->file('image')->getClientOriginalName();
            $imagePath = 'images';
            $request->file('image')->move($imagePath, $imageName);
        }
        if ($request->hasFile('cv')) {
            $cvName = time() . $request->file('cv')->getClientOriginalName();
            $cvPath = 'cv';
            $request->file('cv')->move($cvPath, $cvName);
        }
        $about = About::first();


        $about->update([
            'name' => $request->name,
            'title' => $request->title,
            'body' => $request->body,
            'from' => $request->from,
            'lives_in' => $request->lives_in,
            'age' => $request->age,
            'gender' => $request->gender,
            'image' => (isset($imageName)) ? $imageName : $about->image,
            'cv' => (isset($cvName)) ? $cvName : $about->cv

        ]);
        Session()->flash('done', 'about  Updated !');

        return back();
    }
}