<?php

namespace App\Http\Controllers;

use App\Http\Requests\portfolioCategoryRequest;
use App\Http\Requests\portfolioCreateRequest;
use App\Http\Requests\UpdatePortfolioRequest;
use App\Models\portfolio;
use App\Models\portfolioCategory;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function create()
    {
        $portfolioCategories = portfolioCategory::get();
        return view('Admin.portfolio.create', compact('portfolioCategories'));
    }

    public function store(portfolioCreateRequest $request)
    {



        $portfolioName = time() . $request->file('image')->getClientOriginalName();
        $portfolioPath = 'portfolio';
        $request->file('image')->move($portfolioPath, $portfolioName);

        portfolio::create(
            [
                'title' => $request->title,
                'image' => $portfolioName,
                'tags' => $request->tags,

                'portfolio_category_id' => $request->portfolio_category_id
            ]
        );

        Session()->flash('done', 'portfolio Was Created');

        return redirect()->back();
    }

    public function index()
    {
        $portfolios = portfolio::with('category')->get();
        return view('admin.portfolio.index', compact('portfolios'));
    }

    public function delete(Request $request)
    {

        $portfolio = portfolio::find($request->id);
        if ($portfolio) {
            $portfolio->delete();
            Session()->flash('done', 'portfolio  Was Deleted!');
            return back();
        }

        return back()->withErrors(['portfolio  Not Found']);
    }

    public function edit($id)
    {
        $portfolio = portfolio::find($id);
        $portfolioCategories = portfolioCategory::get();


        return view('Admin.portfolio.edit', compact('portfolio', 'portfolioCategories'));
    }

    public function update(UpdatePortfolioRequest $request)
    {

        $portfolioName = time() . $request->file('image')->getClientOriginalName();
        $portfolioPath = 'portfolio';
        $request->file('image')->move($portfolioPath, $portfolioName);

        $portfolio = portfolio::find($request->id);


        $portfolio->update([
            'title' => $request->title,
            'image' => $portfolioName,

            'tags' => $request->tags,
            'portfolio_category_id' => $request->portfolio_category_id,
        ]);
        Session()->flash('done', 'portfolio  Updated !');

        return redirect(route('admin.portfolio.index'));
    }
}
