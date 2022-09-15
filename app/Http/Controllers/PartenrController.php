<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartenrCreateRequest;
use App\Http\Requests\UpdatePartenrRequest;
use App\Models\partenr;
use Illuminate\Http\Request;

class PartenrController extends Controller
{
    public function create()
    {

        return view('Admin.partenr.create');
    }
    public function store(PartenrCreateRequest $request)
    {


        $partnerName = time() . $request->file('image')->getClientOriginalName();
        $partnerPath = 'partner';
        $request->file('image')->move($partnerPath, $partnerName);

        partenr::create(
            [

                'image' => $partnerName

            ]
        );

        Session()->flash('done', 'partenr Was Created');

        return redirect()->back();
    }


    public function index()
    {
        $partenrs = partenr::get();

        return view('Admin\partenr\index', compact('partenrs'));
    }


    public function delete(Request $request)
    {

        $partenrs = partenr::find($request->id);
        if ($partenrs) {
            $partenrs->delete();
            Session()->flash('done', 'partenr  Was Deleted!');
            return back();
        }

        return back()->withErrors(['partenr  Not Found']);
    }

    public function edit($id)
    {
        $partenrs = partenr::find($id);



        return view('Admin.partenr.edit', compact('partenrs'));
    }

    public function update(UpdatePartenrRequest $request)
    {

        $partnerName = time() . $request->file('image')->getClientOriginalName();
        $partnerPath = 'partner';
        $request->file('image')->move($partnerPath, $partnerName);
        $partenrs = partenr::find($request->id);


        $partenrs->update([
            'image' => $partnerName

        ]);
        Session()->flash('done', 'partenr  Updated !');

        return redirect(route('admin.partenr.index'));
    }
}
