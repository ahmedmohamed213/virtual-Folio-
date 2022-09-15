<?php

namespace App\Http\Controllers;

use App\Models\firstPage;
use Illuminate\Http\Request;

class FirstPageController extends Controller
{
    public function edit()
    {
        $firstPages = firstPage::first();


        return view('Admin.firstPage.edit', compact('firstPages'));
    }

    public function update(Request $request)
    {


        $firstPages = firstPage::first();


        $firstPages->update([
            'name' => $request->name,
            'title' => $request->title,

        ]);
        Session()->flash('done', 'firstPage  Updated !');

        return back();
    }
}