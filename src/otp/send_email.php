<?php

// To Remove unwanted errors
error_reporting(0);

// Add your connection Code
// include "connection.php";

// Important Files (Please check your file path according to your folder structure)
require "src/PHPMailer.php";
require "src/SMTP.php";
require "src/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// Email From Form Input
$send_to_email = $_POST["email"];

// Generate Random 6-Digit OTP
$verification_otp = random_int(100000, 999999);

// Full Name of User
$send_to_name = $_POST["username"];

function sendMail($send_to, $otp, $name) {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Enter your email ID
    $mail->Username = "alexmark011201@gmail.com";
    $mail->Password = "jqiberdueqvgcbsx";

    // Your email ID and Email Title
    $mail->setFrom("alexmark011201@gmail.com", "Adventure Amigos");

    $mail->addAddress($send_to);

    // You can change the subject according to your requirement!
    $mail->Subject = "Reset Password";

    // You can change the Body Message according to your requirement!
    $mail->isHTML(true);  // Set email format to HTML
    $mail->Body = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Your OTP for Adventure Amigos</title>
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
        </style>
    </head>
    <body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333333; margin: 0; padding: 0; background-color: #f0f7f0;">
        <table role="presentation" style="width: 100%; border-collapse: collapse;">
            <tr>
                <td style="padding: 0;">
                    <table role="presentation" style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                        <!-- Header -->
                        <tr>
                            <td style="background-color:cornsilk; text-align: center; padding: 20px; font-family:monospace; color: teal;">
                                <h1>Adventure</h1>
                                <h1>Amigos</h1>
                                </td>
                        </tr>
                        <!-- Content -->
                        <tr>
                            <td style="padding: 30px;">
                                <h1 style="color: #2E7D32; margin-bottom: 20px;">Your One-Time Password</h1>
                                <p style="margin-bottom: 20px;">Hello <b>'.$name.',</b></p>
                                <p style="margin-bottom: 20px;">You\'ve requested a one-time password for your Adventure Amigos account. Use the code below to continue your journey:</p>
                                <div style="background-color: #E8F5E9; border: 2px dashed #4CAF50; border-radius: 8px; padding: 15px; text-align: center; margin-bottom: 20px;">
                                    <h2 style="color: #2E7D32; font-size: 28px; margin: 0;">'.$otp.'</h2>
                                </div>
                                <p style="margin-bottom: 20px;">This code will expire in 10 minutes. If you didn\'t request this OTP, please ignore this email or contact our support team.</p>
                                <p style="margin-bottom: 20px;">Get ready for your next adventure!</p>
                                <p style="margin-bottom: 20px;"><b>The Adventure Amigos Team</b></p>
                            </td>
                        </tr>
                        <!-- Footer -->
                        <tr>
                            <td style="background-color: #0f990b; color: #ffffff; text-align: center; padding: 20px; font-size: 14px;">
                                <p style="margin: 0;">© 2023 Adventure Amigos. All rights reserved.</p>
                                <p style="margin: 5px 0 0;">Contact us: support@adventureamigos.com | +1 (555) 123-4567</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
    </html>';
    $mail->send();
    



    //Your verification code is: {{OTP}}

}

sendMail($send_to_email, $verification_otp, $send_to_name);

// Message to print email success!
echo "Email Sent Successfully!";

?>