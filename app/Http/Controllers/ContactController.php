<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function sendContactForm(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|regex:/^[0-9]{10}$/|max:255', 
            'email' => 'required|email|max:255',  
            'msg' => 'required|string|max:10000',
        ], [
            'mobile.required' => 'The mobile number is required.',
            'mobile.regex' => 'The mobile number must be exactly 10 digits.',
        ]);

        // Log the validated data to check its contents
        Log::info('Validated Form Data:', $validatedData);

        // Send the email through the queue
        Mail::to('stratosdevintern@gmail.com')->send(new ContactFormMail($validatedData));

        // Redirect back to the form with a success message and prevent caching
        return redirect()->route('contact')
            ->with('success', 'Your message has been sent successfully!')
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0')
            ->header('Pragma', 'no-cache')
            ->header('Expires', 'Sat, 26 Jul 1997 05:00:00 GMT');
    }
}
