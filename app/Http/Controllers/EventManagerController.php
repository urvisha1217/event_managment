<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class EventManagerController extends Controller
{
    public function index()
    {
        return view('contact_us');
    }

    public function getContacts()
    {
        $contacts = Contact::all();
        return response()->json($contacts);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'number' => 'required|string|max:10',
            'message' => 'required|string',
        ]);
        Contact::create($request->all());
       // return redirect()->route('contacts.index')->with('success','your message sent successfully.');
       return back()->with('success', 'Your message has been sent successfully!');
       // return response()->json($contact);
    }

}
    