<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Stevebauman\Location\Facades\Location;

class ContactMessageCntr extends Controller
{
    public function getInTouch(Request $request)
    {
        try{
            $validation =  Validator::make($request->all(),[
                'name' => 'required',
                'email' => 'required|email:rfc,dns',
                'message' => 'required',
            ]);

            if ($validation->fails()) {
                throw new \Exception($validation->errors()->first());
            }
            $senderLocation = Location::get('https://'.$request->ip());
            $saveMessage = new ContactMessage;
            $saveMessage->name = $request->name;
            $saveMessage->email = $request->email;
            $saveMessage->message_content = $request->message;
            $saveMessage->state = $senderLocation->cityName;
            $saveMessage->country = $senderLocation->countryName;
            $saveMessage->save();

            return redirect()->back()->with('Thank you for contacting! Your message has been received and I will get back to you shortly. Have a great day!');

        }catch(\Throwable $t){
            Log::error($t);
            $message['type'] = 'error';
            $message['message'] = $t->getMessage();
            return redirect()->back()->with($message);
        }
    }
}
