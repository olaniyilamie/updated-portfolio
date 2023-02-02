<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class MessageAccess extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('message.access');
    }

    public function index()
    {
        $messages = ContactMessage::select('country', 'created_at')->get();   
        $fullMessages = ContactMessage::get();   
        return view('auth.forms.contact',compact(['messages', 'fullMessages']));
    }
}
