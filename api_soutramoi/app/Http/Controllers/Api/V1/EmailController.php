<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    //
    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'to' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $to = $validatedData['to'];
        $subject = $validatedData['subject'];
        $message = $validatedData['message'];

        Mail::to($to)->send(new SendMail($subject, $message));

        return response()->json(['message' => 'Email sent successfully'], 200);
    }
}
