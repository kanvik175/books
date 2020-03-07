<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required|max:250'
            ]
        );

        Mail::to('support@biblio.ru')->send(new ContactMail($data));

        return redirect('contact')->with('message', 'Ваше сообщение успешно отправлено.');
    }
}
