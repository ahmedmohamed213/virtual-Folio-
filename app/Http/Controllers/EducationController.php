<?php

namespace App\Http\Controllers;

use App\Http\Requests\educationCreateRequest;
use App\Http\Requests\UpdateEducationRequest;
use App\Models\education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function create()
    {

        return view('Admin.education.create');
    }
    public function store(educationCreateRequest $request)
    {
        education::create(
            [

                'title' => $request->title,
                'location' => $request->location,
                'body' => $request->body,
                'year' => $request->year,

            ]
        );

        Session()->flash('done', 'education Was Created');

        return redirect()->back();
    }


    public function index()
    {
        $educations = education::get();
        return view('admin.education.index', compact('educations'));
    }


    public function delete(Request $request)
    {

        $educations = education::find($request->id);
        if ($educations) {
            $educations->delete();
            Session()->flash('done', 'education  Was Deleted!');
            return back();
        }

        return back()->withErrors(['education  Not Found']);
    }

    public function edit($id)
    {
        $educations = education::find($id);



        return view('Admin.education.edit', compact('educations'));
    }

    public function update(UpdateEducationRequest $request)
    {
        $educations = education::find($request->id);


        $educations->update([
            'title' => $request->title,
            'location' => $request->location,
            'body' => $request->body,
            'year' => $request->year,
        ]);
        Session()->flash('done', 'education  Updated !');

        return redirect(route('admin.education.index'));
    }
}