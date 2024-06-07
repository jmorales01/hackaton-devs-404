<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Chat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .chat-container {
            display: flex;
            height: 100vh;
        }
        .chat-sidebar {
            width: 25%;
            background-color: #2c3e50;
            color: white;
            display: flex;
            flex-direction: column;
        }
        .chat-sidebar-header {
            padding: 20px;
            text-align: center;
            background-color: #34495e;
        }
        .chat-sidebar-header h2 {
            margin: 0;
        }
        .chat-sidebar-list {
            flex: 1;
            overflow-y: auto;
        }
        .chat-sidebar-list-item {
            padding: 20px;
            border-bottom: 1px solid #34495e;
            cursor: pointer;
            display: flex;
            align-items: center;
        }
        .chat-sidebar-list-item:hover {
            background-color: #34495e;
        }
        .chat-sidebar-list-item img {
            border-radius: 50%;
            margin-right: 15px;
        }
        .chat-main {
            width: 75%;
            display: flex;
            flex-direction: column;
        }
        .chat-header {
            padding: 20px;
            background-color: #3498db;
            color: white;
            display: flex;
            align-items: center;
        }
        .chat-header img {
            border-radius: 50%;
            margin-right: 15px;
        }
        .chat-messages {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            background-color: #ecf0f1;
        }
        .message {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }
        .message img {
            border-radius: 50%;
            margin-right: 10px;
        }
        .message-content {
            background-color: white;
            padding: 15px;
            border-radius: 10px;
            max-width: 60%;
        }
        .message-content p {
            margin: 0;
        }
        .chat-footer {
            padding: 20px;
            background-color: #bdc3c7;
            display: flex;
            align-items: center;
        }
        .chat-footer input {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-right: 10px;
        }
        .chat-footer button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
        .chat-footer button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="chat-container">
        <div class="chat-sidebar">
            <div class="chat-sidebar-header">
                <h2>Chats</h2>
            </div>
            <div class="chat-sidebar-list">
                <div class="chat-sidebar-list-item">
                    <img src="https://via.placeholder.com/50" alt="User 1">
                    <div>
                        <h3>User 1</h3>
                        <p>Last message...</p>
                    </div>
                </div>
                <div class="chat-sidebar-list-item">
                    <img src="https://via.placeholder.com/50" alt="User 2">
                    <div>
                        <h3>User 2</h3>
                        <p>Last message...</p>
                    </div>
                </div>
                <!-- More chat items -->
            </div>
        </div>
        <div class="chat-main">
            <div class="chat-header">
                <img src="https://via.placeholder.com/50" alt="Current User">
                <h3>Current User</h3>
            </div>
            <div class="chat-messages">
            <?php
                foreach ($data as $message) {
                    echo '<div class="message">';
                    echo '<img src="https://via.placeholder.com/50" alt="User">';
                    echo '<div class="message-content">';
                    echo '<p>' . $message['message']. '</p>'; // Cambiado a notación de objeto
                    echo '</div>';
                    echo '</div>';
                }
            ?>
            </div>
            <div class="chat-footer">
                <input type="text" placeholder="Type a message...">
                <button><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>
    </div>
</body>
</html>
