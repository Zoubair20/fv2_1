<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Post, App\Category , App\Contact;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{

    public function accueil(){
        return view('fv1.accueil');

    }
    public function services(){
        return view('fv1.services');

    }
    public function profils(){
        return view('fv1.profils');

    }
    public function contact(){
        return view('fv1.contact');
    }
    public function quote(){
        return view('fv1.quote');

    }

    public function store(Request $request){

        $contact = new Contact();

        $contact->nom = $request->input('nom');
        $contact->email = $request->input('email');
        $contact->telephone = $request->input('tel');
        $contact->objet = $request->input('objet');
        $contact->message = $request->input('message');

        $contact->save();

        $data=request();
        Mail::to('zoubair.firstview@gmail.com')->bcc('wydad@firstviewagency.com')->send(new ContactFormMail($data));
        return redirect('contact')->with('status', 'Votre message a été envoyé. Je vous remercie!');
    }

}


