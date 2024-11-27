<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;

    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    public function build()
    {
        // Ensure the data being passed to the email view is in the correct format (strings).
        Log::info('Data being sent to the email view:', [
            'name' => (string) $this->formData['name'],
            'email' => (string) $this->formData['email'],
            'msg' => (string) $this->formData['msg'],
        ]);

        // Return the email view with the correct data passed as strings
        return $this->from('stratosdevintern@gmail.com')
                    ->subject('Contact Form Submission')
                    ->view('emails.contact_form')
                    ->with([
                        'name' => (string) $this->formData['name'],
                        'email' => (string) $this->formData['email'],
                        'msg' => (string) $this->formData['msg'],
                    ]);
    }
}
