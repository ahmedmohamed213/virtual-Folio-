<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkillCategoryRequest;
use App\Http\Requests\UpdateSkillCategoryRequest;
use App\Models\SkillCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SkillCategoryController extends Controller
{
    public function create()
    {
        return view('Admin/skillCategory/create');
    }
    public function store(SkillCategoryRequest $request)
    {
        SkillCategory::create(
            [
                'name' => $request->name
            ]
        );

        return redirect()->back();
    }

    public function index()
    {
        $skillCategories = SkillCategory::get();
        return view('Admin.skillCategory.index', compact('skillCategories'));
    }

    public function delete(Request $request)
    {

        $skillCategory = SkillCategory::find($request->id);
        if ($skillCategory) {
            $skillCategory->delete();
            Session()->flash('done', 'Skill Category Was Deleted!');
            return back();
        }

        return back()->withErrors(['Skill Category Not Found']);
    }

    public function edit($id)
    {
        $skillCategory = skillCategory::find($id);

        return view('Admin.skillCategory.edit', compact('skillCategory'));
    }
    public function update(UpdateSkillCategoryRequest $request)
    {
        $skillCategory = SkillCategory::find($request->id);


        $skillCategory->update([
            'name' => $request->name
        ]);
        Session()->flash('done', 'Skill Category Updated !');

        return redirect(route('admin.skill.category.index'));
    }
}