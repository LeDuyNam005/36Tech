<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load thư viện 
require 'mailer\Exception.php';
require 'mailer\PHPMailer.php';
require 'mailer\SMTP.php';

function sendOTP($receiver, $otp_code)
{
    $mail = new PHPMailer(true);
    try {
        // --- 1. Cấu hình Email  ---
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'phenolgrk07@gmail.com';
        $mail->Password   = 'rqopcaudcoebljml';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;


        // --- 2. Cấu hình Email NHẬN  ---
        $mail->setFrom('maihang122th@gmail.com', '36Tech Support');
        $mail->addAddress($receiver);
        $mail->CharSet = 'UTF-8';
        $mail->isHTML(true);
        $mail->Subject = '[36Tech] Mã xác thực bảo mật (OTP)';

        $mail->Body = "
    <div style='font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; border: 1px solid #ddd; padding: 20px; border-radius: 8px;'>
        <h2 style='color: #0056b3; text-align: center;'>Xác thực tài khoản</h2>
        <p>Xin chào,</p>
        <p>Chúng tôi nhận được yêu cầu xác thực cho tài khoản <b>36Tech</b> của bạn. Vui lòng sử dụng mã OTP bên dưới để tiếp tục:</p>
        
        <div style='background-color: #f4f4f4; padding: 15px; text-align: center; border-radius: 5px; margin: 20px 0;'>
            <span style='font-size: 24px; font-weight: bold; letter-spacing: 5px; color: #d9534f;'>$otp_code</span>
        </div>
        
        <p>Mã này sẽ hết hạn trong vòng <b>5 phút</b>.</p>
        <p style='color: #777; font-size: 13px;'><i>Lưu ý: Nếu bạn không thực hiện yêu cầu này, vui lòng bỏ qua email này. Tuyệt đối không chia sẻ mã OTP với bất kỳ ai.</i></p>
        
        <hr style='border: 0; border-top: 1px solid #eee; margin: 20px 0;'>
        <p style='text-align: center; font-size: 12px; color: #999;'>© 2024 36Tech. All rights reserved.</p>
    </div>";
        return $mail->send();
    } catch (Exception $e) {
        return false;
    }
}
