<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){
        Contact::create($request->all());
        return redirect()->route('contact.index');
    }
    public function index(){
        $contacts = Contact::paginate(8);
        return view('contact.index', compact('contacts'));
    }
    public function show($id){
        $contact = Contact::where('id', $id)->firstOrFail();
        return view('contact.show', compact('contact'));
    }
}
