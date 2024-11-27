<x-home-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Prevent caching of the form -->
        <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="Sat, 26 Jul 1997 05:00:00 GMT" />
        <title>Contact Form</title>
        <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    </head>
    <body>
        <h1>Contact Form</h1>
        
        <!-- Display success message if present -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="/submit" method="POST" class="contact-form" id="contactForm">
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

        <script>
            // Clear the form fields once the page is loaded to avoid showing previously filled data
            window.onload = function() {
                // Ensure form is cleared only when redirected after success
                if ({{ session('success') ? 'true' : 'false' }}) {
                    document.getElementById('contactForm').reset();
                }
            };
        </script>
    </body>
    </html>
</x-home-layout>
