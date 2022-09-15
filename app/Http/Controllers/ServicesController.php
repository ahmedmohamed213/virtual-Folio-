<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceCreateRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function create()
    {

        return view('Admin.service.create');
    }
    public function store(ServiceCreateRequest $request)
    {
        Service::create(
            [
                'icon' => $request->icon,
                'title' => $request->title,
                'body' => $request->body
            ]
        );

        Session()->flash('done', 'service Was Created');

        return redirect()->back();
    }

    public function index()
    {
        $services = service::get();
        return view('admin.service.index', compact('services'));
    }

    public function delete(Request $request)
    {

        $service = service::find($request->id);
        if ($service) {
            $service->delete();
            Session()->flash('done', 'service  Was Deleted!');
            return back();
        }

        return back()->withErrors(['service  Not Found']);
    }

    public function edit($id)
    {
        $services = service::find($id);



        return view('Admin.service.edit', compact('services'));
    }

    public function update(UpdateServiceRequest $request)
    {
        $services = service::find($request->id);


        $services->update([
            'icon' => $request->icon,
            'title' => $request->title,
            'body' => $request->body,
        ]);
        Session()->flash('done', 'service  Updated !');

        return redirect(route('admin.service.index'));
    }
}