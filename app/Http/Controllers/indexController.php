<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('page.index',compact('contacts'));
    }
}
