<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ContactFormMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $formData;

    /**
     * Create a new message instance.
     *
     * @param array $formData
     * @return void
     */
    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    /**
     * Build the email.
     *
     * @return $this
     */
    public function build()
    {
        // Log the validated form data to ensure it's being passed correctly
        Log::info('Data being sent to the email view:', [
            'name' => (string) $this->formData['name'],
            'mobile' => (string) $this->formData['mobile'],
            'email' => (string) $this->formData['email'],
            'msg' => (string) $this->formData['msg'],
        ]);

        return $this->from('stratosdevintern@gmail.com') // Sender email
                    ->subject('Contact Form Submission')  // Email subject
                    ->view('emails.contact_form')  // View file (create this email template)
                    ->with([
                        'name' => (string) $this->formData['name'],
                        'mobile' => (string) $this->formData['mobile'],
                        'email' => (string) $this->formData['email'],
                        'msg' => (string) $this->formData['msg'],
                    ])
                    
                    ->delay(now()->addSeconds(5));
    }
}
