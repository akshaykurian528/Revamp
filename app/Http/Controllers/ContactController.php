<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;  // Ensure Log is imported

class ContactController extends Controller
{
    public function sendContactForm(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'msg' => 'required|string|max:255',
        ]);

        // Log the validated data to check its contents
        Log::info('Validated Form Data:', $validatedData);

        // Send email with the validated data
        Mail::to('akshaykurian825@gmail.com')->send(new ContactFormMail($validatedData));

        // Return response with success message
        return back()->with('success', 'Your message has been sent successfully!');
    }
}
