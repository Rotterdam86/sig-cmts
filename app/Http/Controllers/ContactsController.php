<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use MercurySeries\Flashy\Flashy;; 
use App\Models\Message;   

class ContactsController extends Controller
{
    // Définition de la méthode create
    public function create()
    {
        return view('contacts.create');
    }

    // Définition de la méthode store
    public function store(ContactRequest $request)
    {
        // pause message de trois (3) secondes
        //sleep(3);
        // nouvelle instance du model message
        //création d'un nouveau message
        $message = Message::create($request->only('nom', 'prenom', 'email', 'sms'));
        // affectation des valeurs
        /*$message->nom = $request->nom;
        $message->prenom = $request->prenom;
        $message->email = $request->email;
        $message->sms = $request->sms;
        // sauvegarde du message
        $message->save();*/
        // création d'un nouveau contact
        $mailable= new ContactMessageCreated($message);
        // envoie de mail
        Mail::to(config('sigcmts.admin_support_email'))->send($mailable);
        flashy('Nous vous répondrons dans les plus bref delais');
        return redirect()->route('root_path');
    }
}
