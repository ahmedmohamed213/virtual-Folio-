<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactCreateRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // public function create()
    // {

    //     return view('Admin.contact.create');
    // }

    public function store(ContactCreateRequest $request)
    {
        Contact::create(
            [

                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'body' => $request->body,

            ]
        );

        Session()->flash('done', 'Message Was Sended');

        return redirect()->back();
    }


    public function index()
    {
        $contacts = Contact::get();
        return view('admin.contact.index', compact('contacts'));
    }


    public function delete(Request $request)
    {

        $contacts = Contact::find($request->id);
        if ($contacts) {
            $contacts->delete();
            Session()->flash('done', 'contact  Was Deleted!');
            return back();
        }

        return back()->withErrors(['contact  Not Found']);
    }
}
