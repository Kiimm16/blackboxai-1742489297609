<?php
require_once 'config.php';
requireLogin(); // Ensure user is logged in

// Fetch messages from the database (dummy data for now)
$messages = [
    ['name' => 'John Doe', 'email' => 'john@example.com', 'message' => 'Hello! I am interested in your work.'],
    ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'message' => 'Can we schedule a meeting?'],
];

// Display messages
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages - Admin Dashboard</title>
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="index.php" class="text-xl font-semibold text-blue-600">KJ</a>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
                    <a href="logout.php" class="text-red-600 hover:text-red-800">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Messages</h1>
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Message</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($messages as $msg): ?>
                <tr>
                    <td class="py-2 px-4 border-b"><?php echo htmlspecialchars($msg['name']); ?></td>
                    <td class="py-2 px-4 border-b"><?php echo htmlspecialchars($msg['email']); ?></td>
                    <td class="py-2 px-4 border-b"><?php echo htmlspecialchars($msg['message']); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>