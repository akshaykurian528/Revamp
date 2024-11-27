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
            'email' => 'required|email|max:255',
            'msg' => 'required|string|max:10000',
        ]);

        // Log the validated data to check its contents
        Log::info('Validated Form Data:', $validatedData);

        // Send email with the validated data
        Mail::to('akshaykurian825@gmail.com')->send(new ContactFormMail($validatedData));

        // Redirect back to the form with a success message and prevent caching
        return redirect()->route('contact')
            ->with('success', 'Your message has been sent successfully!')
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0')
            ->header('Pragma', 'no-cache')
            ->header('Expires', 'Sat, 26 Jul 1997 05:00:00 GMT');
    }
}
