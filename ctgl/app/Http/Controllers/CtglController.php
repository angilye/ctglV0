<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contacts;

class CtglController extends Controller
{
    public function home()
    {
        return view('Acceuil');
    }

    public function presentation()
    {
        return view('layouts.presentation');
    }


    public function contact()
    {
        return view('layouts.Contact');
    }

    public function store (ContactRequest $request)
    {
        $contact = new contacts;
        $contact->nom = $request->nom;
        $contact->email = $request->email;
        $contact->motif = $request->motif;
        $contact->message = $request->msg;

        $contact->save(); // sauvegarde des données sur la DB.
        return redirect()->route('home_path');
    }
}
