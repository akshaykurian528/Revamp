<x-home-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Form</title>
        <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    </head>
    <body>
        <h1>Contact Form</h1>

        <!-- Display Success Message -->
        @if(session('success'))
            <div class="alert alert-success" style="margin-bottom: 20px; color: green; border: 1px solid green; padding: 10px; border-radius: 5px;">
                {{ session('success') }}
            </div>
        @endif

        <!-- Contact Form -->
        <form action="/submit" method="POST" class="contact-form">
            @csrf
            <h2>Contact Us</h2>
            
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your Name" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Your Email" required>
            </div>
            
            <div class="form-group">
                <label for="msg">Message</label>
                <textarea id="msg" name="msg" placeholder="Your Message" rows="5" required></textarea>
            </div>
            
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </body>
    </html>
</x-home-layout>
