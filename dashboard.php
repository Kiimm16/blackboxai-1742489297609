<?php
require_once 'config.php';
requireLogin(); // Ensure user is logged in

// Regenerate session ID periodically
regenerateSession();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Kimberly Jihay Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="font-[Poppins] bg-gray-100">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="index.php" class="text-xl font-semibold text-blue-600">KJ</a>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
                    <a href="logout.php" class="text-red-600 hover:text-red-800">
                        <i class="fas fa-sign-out-alt mr-2"></i>Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Dashboard Content -->
    <div class="max-w-6xl mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h1 class="text-2xl font-bold mb-6">Admin Dashboard</h1>
            
            <!-- Session Information -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold mb-4">Session Information</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p class="text-gray-600">Session ID: <?php echo session_id(); ?></p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p class="text-gray-600">Last Activity: <?php echo date('Y-m-d H:i:s', $_SESSION['last_activity']); ?></p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p class="text-gray-600">Session Created: <?php echo date('Y-m-d H:i:s', $_SESSION['created']); ?></p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p class="text-gray-600">Session Expires: <?php echo date('Y-m-d H:i:s', $_SESSION['last_activity'] + 1800); ?></p>
                    </div>
                </div>
            </div>

<!-- Quick Actions with Messages and Analytics -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold mb-4">Quick Actions</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <a href="index.php" class="bg-blue-50 p-4 rounded-lg hover:bg-blue-100 transition duration-300">
                        <i class="fas fa-home text-blue-600 text-2xl mb-2"></i>
                        <h3 class="font-semibold">View Website</h3>
                        <p class="text-sm text-gray-600">Go to the main website</p>
                    </a>
                    <a href="#" class="bg-purple-50 p-4 rounded-lg hover:bg-purple-100 transition duration-300">
                        <i class="fas fa-envelope text-purple-600 text-2xl mb-2"></i>
                        <h3 class="font-semibold">Messages</h3>
                        <p class="text-sm text-gray-600">View contact form submissions</p>
                    </a>
                    <a href="#" class="bg-green-50 p-4 rounded-lg hover:bg-green-100 transition duration-300">
                        <i class="fas fa-chart-bar text-green-600 text-2xl mb-2"></i>
                        <h3 class="font-semibold">Analytics</h3>
                        <p class="text-sm text-gray-600">View website statistics</p>
                    </a>
                </div>
            </div>

            <!-- Security Information -->
            <div>
                <h2 class="text-xl font-semibold mb-4">Security Information</h2>
                <div class="bg-yellow-50 p-4 rounded-lg">
                    <p class="text-yellow-800">
                        <i class="fas fa-shield-alt mr-2"></i>
                        Your session will automatically expire after 30 minutes of inactivity.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
    // Auto logout countdown
    let timeLeft = 1800; // 30 minutes in seconds
    const countdownElement = document.createElement('div');
    countdownElement.className = 'fixed bottom-4 right-4 bg-white p-4 rounded-lg shadow-lg';
    document.body.appendChild(countdownElement);

    function updateCountdown() {
        const minutes = Math.floor(timeLeft / 60);
        const seconds = timeLeft % 60;
        countdownElement.innerHTML = `
            <p class="text-sm text-gray-600">Session expires in:</p>
            <p class="font-semibold">${minutes}:${seconds.toString().padStart(2, '0')}</p>
        `;
        
        if (timeLeft <= 0) {
            window.location.href = 'logout.php';
        } else {
            timeLeft--;
            setTimeout(updateCountdown, 1000);
        }
    }

    updateCountdown();
    </script>
</body>
</html>