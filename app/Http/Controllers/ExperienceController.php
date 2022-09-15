<?php

namespace App\Http\Controllers;

use App\Http\Requests\experienceCreateRequest;
use App\Http\Requests\UpdateExperienceRequest;
use App\Models\experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{

    public function create()
    {

        return view('Admin.experience.create');
    }
    public function store(experienceCreateRequest $request)
    {
        experience::create(
            [

                'title' => $request->title,
                'location' => $request->location,
                'body' => $request->body,
                'year' => $request->year,

            ]
        );

        Session()->flash('done', 'experience Was Created');

        return redirect()->back();
    }


    public function index()
    {
        $experiences = experience::get();
        return view('admin.experience.index', compact('experiences'));
    }


    public function delete(Request $request)
    {

        $experiences = experience::find($request->id);
        if ($experiences) {
            $experiences->delete();
            Session()->flash('done', 'experience  Was Deleted!');
            return back();
        }

        return back()->withErrors(['experience  Not Found']);
    }

    public function edit($id)
    {
        $experiences = experience::find($id);



        return view('Admin.experience.edit', compact('experiences'));
    }

    public function update(UpdateExperienceRequest $request)
    {
        $experiences = experience::find($request->id);


        $experiences->update([
            'title' => $request->title,
            'location' => $request->location,
            'body' => $request->body,
            'year' => $request->year,
        ]);
        Session()->flash('done', 'experience  Updated !');

        return redirect(route('admin.experience.index'));
    }
}