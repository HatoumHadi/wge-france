<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8" />
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333333;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        .email-container {
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 8px;
            padding: 30px;
            max-width: 600px;
            margin: 0 auto;
        }
        .email-header {
            text-align: center;
            border-bottom: 1px solid #dddddd;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }
        .email-header img {
            max-height: 60px;
            margin-bottom: 10px;
        }
        .email-header h2 {
            margin: 0;
            color: #ff7f38;
        }
        .email-content p {
            margin: 8px 0;
            line-height: 1.6;
        }
        .email-footer {
            margin-top: 30px;
            font-size: 12px;
            color: #777777;
        }
    </style>
</head>
<body>
<div class="email-container">
    <div class="email-header">
        <img src="{{ asset('storage/'.$logo) }}" alt="wge-france">
        <h2>New Contact Form Submission</h2>
    </div>
    <div class="email-content">
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Phone:</strong> {{ $data['telephone'] }}</p>
        <p><strong>Message:</strong><br>{{ $data['message'] }}</p>
    </div>
    <div class="email-footer">
        <p>WGE France</p>
    </div>
</div>
</body>
</html>
