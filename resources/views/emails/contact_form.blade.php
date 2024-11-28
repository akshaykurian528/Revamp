<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border: 1px solid #ddd;
        }
        .header {
            font-family: "Courier New", Courier, monospace;
            background-color: #007bff;
            color: #ffffff;
            text-align: center;
            padding: 20px;
            font-size: 24px;
        }
        .content {
            font-family: "Courier New", Courier, monospace;
            padding: 20px;
        }
        .content p {
            font-size: 16px;
            line-height: 1.6;
            margin: 10px 0;
            color: #555;
        }
        .content p strong {
            color: #333;
        }
        .footer {
            font-family: "Courier New", Courier, monospace;
            text-align: center;
            background-color: #f1f1f1;
            color: #555;
            padding: 15px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <strong>New Message</strong>
        </div>

        <!-- Content -->
        <div class="content">
            <p><strong>Name:</strong> {{ is_string($name) ? $name : 'Not a string' }}</p>
            <p><strong>Mobile:</strong> {{ is_string($mobile) ? $mobile : 'Not a string' }}</p>
            <p><strong>Email:</strong> {{ is_string($email) ? $email : 'Not a string' }}</p>
            <p><strong>Message:</strong> {{ is_string($msg) ? $msg : 'Not a string' }}</p>
        </div>

        <!-- Footer -->
        <div class="footer">
            © 2024 Revamp. All rights reserved.    
        </div>
    </div>
</body>
</html>
