<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;


class contactController extends Controller
{
    public function contactMain()
    {
        $contacts = Contact::all();
        $contacts = Contact::paginate(25);
        return view('page.clients', compact('contacts'));
    }

    public function create()
    {
        return view('page.create');
    }

    public function add()
    {
        $contact = new Contact();
        $contact->name = request('name');
        $contact->email = request('email');
        $contact->phone = request('phone');
        $contact->message = request('message');
        $contact->save();
        return redirect('/');
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('page.edit', compact('contact'));
    }

    public function update()
    {
        $contact = Contact::find(request('id'));
        $contact->name = request('name');
        $contact->email = request('email');
        $contact->phone = request('phone');
        $contact->message = request('message');
        $contact->save();
        return redirect('/');
    }


    public function findByID($id)
    {
        $contact = Contact::find($id);
        return view('page.findByID', compact('contact'));
    }

    public function delete($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('index');
    }

    public function contact()
    {
        return view('page.contact');
    }

    public function send(Request $request)
    {

        $contact = new ContactMail($request->all());
        Mail::to('javargas98@hotmail.com')->send($contact);
        return redirect()->route('index');
    }
}
