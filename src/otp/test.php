$mail->isHTML(true);  // Set email format to HTML
$mail->Body = "
    <html>
    <head>
        <style>
            .email-body {
                font-family: Arial, sans-serif;
                color: #333333;
                line-height: 1.5;
            }
            .highlight {
                font-weight: bold;
                color: #1a73e8;  /* Google blue */
            }
            .otp-code {
                font-size: 18px;
                font-weight: bold;
                color: #d9534f; /* Red color for the OTP */
            }
            .footer {
                font-size: 12px;
                color: #888888;
            }
        </style>
    </head>
    <body>
        <div class='email-body'>
            Hello, <span class='highlight'>{$name}</span><br><br>
            Your one-time password is: <span class='otp-code'>{$otp}</span><br><br>
            This code will expire in 10 minutes. Do not share this code with anyone. If you did not request this, please ignore this message.<br><br>
            Thank you,<br>
            <span class='highlight'>Adventure Amigos</span> Team
        </div>
        <div class='footer'>
            <br> © 2024 Adventure Amigos. All rights reserved.
        </div>
    </body>
    </html>
";
