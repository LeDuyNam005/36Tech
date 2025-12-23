<?php
session_start();
/**
 * Kiểm tra user đã đăng nhập
 * Nếu chưa → redirect về login
 */
function requireLogin()
{
    if (!isset($_SESSION['user_id'])) {
        header('Location: ../app/auth/login.php');
        exit;
    }
}
function requireAdmin()
{
    requireLogin();
    if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
        http_response_code(403);
    }
}

function isLoggedIn()
{
    return isset($_SESSION['user_id']);
}

function isAdmin()
{
    return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
}

function isUser()
{
    return isset($_SESSION['role']) && $_SESSION['role'] === 'user';
}

function getUserRole()
{
    return $_SESSION['role'] ?? 'guest';
}

function redirectIfLoggedIn()
{
    if (isLoggedIn()) {
        header('Location: /PJ/36Tech-demo/public/');
        exit;
    }
}
