<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            font-size: 16px;
            line-height: 1.6;
            margin: 10px 0;
        }
        strong {
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> {{ is_string($name) ? $name : 'Not a string' }}</p>
        <p><strong>Email:</strong> {{ is_string($email) ? $email : 'Not a string' }}</p>
        <p><strong>Message:</strong> {{ is_string($msg) ? $msg : 'Not a string' }}</p>
    </div>
</body>
</html>
