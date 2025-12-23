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
        $mail->Subject = 'Mã xác thực OTP của bạn - 36Tech';
        $mail->Body = "
    <h3>Xin chào,</h3>
    <p>Bạn đang thực hiện thao tác thay đổi mật khẩu tại hệ thống <b>36Tech</b>.</p>
    <p>Mã xác thực (OTP) của bạn là:</p>
    
    <h1 style='color: #ff7a7aff; margin: 10px 0;'>$otp_code</h1>
    
    <p>Mã này có hiệu lực trong 5 phút. Vui lòng nhập mã ngay để hoàn tất quá trình.</p>
    <br>
    <p>Trân trọng,<br>Đội ngũ Hỗ trợ 36Tech</p>
";
        return $mail->send();
    } catch (Exception $e) {
        return false;
    }
}
