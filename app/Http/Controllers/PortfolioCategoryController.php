<?php

namespace App\Http\Controllers;

use App\Http\Requests\portfolioCategoryRequest;
use App\Models\portfolioCategory;
use Illuminate\Http\Request;

class PortfolioCategoryController extends Controller
{
    public function create()
    {
        return view('Admin\portfolioCategory\create');
    }

    public function store(portfolioCategoryRequest $request)
    {
        portfolioCategory::create(
            [
                'name' => $request->name,
                'data_filter_name' => $request->data_filter_name


            ]
        );

        return redirect()->back();
    }

    public function index()
    {

        $portfolioCategories = portfolioCategory::get();
        return view('Admin.portfolioCategory.index', compact('portfolioCategories'));
    }

    public function delete(Request $request)
    {

        $portfolioCategory = portfolioCategory::find($request->id);
        if ($portfolioCategory) {
            $portfolioCategory->delete();
            Session()->flash('done', 'portfolio Category Was Deleted!');
            return back();
        }

        return back()->withErrors(['portfolio Category Not Found']);
    }

    public function edit($id)
    {
        $portfolioCategory = portfolioCategory::find($id);

        return view('Admin.portfolioCategory.edit', compact('portfolioCategory'));
    }

    public function update(portfolioCategoryRequest $request)
    {
        $portfolioCategory = portfolioCategory::find($request->id);


        $portfolioCategory->update([
            'name' => $request->name,
            'data_filter_name' => $request->data_filter_name

        ]);
        Session()->flash('done', 'portfolio Category Updated !');

        return redirect(route('admin.portfolio.category.index'));
    }
}