<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
            border-bottom: 2px solid #f8e231;
            padding-bottom: 8px;
        }
        p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
        }
        .info {
            background: #f8f8f8;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }
        .info strong {
            color: #222;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>New Contact Form Submission</h2>
    <p><strong>Full Name:</strong> {{ $data['full_name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
    <div class="info">
        <p><strong>Message:</strong></p>
        <p>{{ nl2br(e($data['message'])) }}</p>
    </div>
    <p class="footer">This message was sent from the contact form on Zues 808.</p>
</div>
</body>
</html>
