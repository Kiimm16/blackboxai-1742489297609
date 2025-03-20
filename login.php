<?php
require_once 'config.php';

// Redirect if already logged in
if (isLoggedIn()) {
    header('Location: dashboard.php');
    exit();
}

// Generate CSRF token
$csrf_token = generateCSRFToken();

// Get error/success messages
$error = '';
$success = '';

if (isset($_GET['error'])) {
    switch ($_GET['error']) {
        case '1':
            $error = 'Invalid username or password';
            break;
        case 'csrf':
            $error = 'Security token validation failed. Please try again.';
            break;
        default:
            $error = 'An error occurred';
    }
}

if (isset($_GET['logout'])) {
    $success = 'You have been successfully logged out';
}

if (isset($_GET['timeout'])) {
    $error = 'Your session has expired. Please login again';
}

if (isset($_GET['auth'])) {
    $error = 'Please login to access that page';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kimberly Jihay Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="font-[Poppins] bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full mx-4">
        <!-- Logo and Title -->
        <div class="text-center mb-8">
            <a href="index.php" class="text-3xl font-bold text-blue-600">KJ</a>
            <h1 class="mt-4 text-2xl font-bold text-gray-900">Admin Login</h1>
        </div>

        <!-- Login Form -->
        <div class="bg-white py-8 px-6 shadow-lg rounded-lg">
            <?php if ($error): ?>
                <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline"><?php echo htmlspecialchars($error); ?></span>
                </div>
            <?php endif; ?>

            <?php if ($success): ?>
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline"><?php echo htmlspecialchars($success); ?></span>
                </div>
            <?php endif; ?>

            <form id="loginForm" action="authenticate.php" method="POST" class="space-y-6">
                <!-- Hidden CSRF Token -->
                <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>">
                
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <div class="mt-1 relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-user text-gray-400"></i>
                        </div>
                        <input id="username" 
                               name="username" 
                               type="text" 
                               required 
                               class="appearance-none block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                               placeholder="Enter your username">
                    </div>
                    <div class="error-message hidden text-red-500 text-sm mt-1"></div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="mt-1 relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400"></i>
                        </div>
                        <input id="password" 
                               name="password" 
                               type="password" 
                               required 
                               class="appearance-none block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                               placeholder="Enter your password">
                    </div>
                    <div class="error-message hidden text-red-500 text-sm mt-1"></div>
                </div>

                <div>
                    <button type="submit" 
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <i class="fas fa-sign-in-alt mr-2"></i>Sign in
                    </button>
                </div>
            </form>
        </div>

        <!-- Back to Home Link -->
        <div class="text-center mt-8">
            <a href="index.php" class="text-sm font-medium text-blue-600 hover:text-blue-500">
                <i class="fas fa-arrow-left mr-2"></i>Back to Home
            </a>
        </div>
    </div>

    <script>
        // Form validation
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            let isValid = true;
            const username = document.getElementById('username');
            const password = document.getElementById('password');
            
            // Reset previous error messages
            document.querySelectorAll('.error-message').forEach(msg => {
                msg.classList.add('hidden');
                msg.textContent = '';
            });
            
            // Username validation
            if (!username.value.trim()) {
                showError(username, 'Username is required');
                isValid = false;
            }
            
            // Password validation
            if (!password.value.trim()) {
                showError(password, 'Password is required');
                isValid = false;
            }
            
            if (!isValid) {
                e.preventDefault();
            }
        });

        function showError(input, message) {
            const errorDiv = input.parentElement.parentElement.querySelector('.error-message');
            errorDiv.textContent = message;
            errorDiv.classList.remove('hidden');
            input.classList.add('border-red-500');
        }

        // Auto-hide alerts after 5 seconds
        document.querySelectorAll('[role="alert"]').forEach(alert => {
            setTimeout(() => {
                alert.style.opacity = '0';
                alert.style.transition = 'opacity 0.5s';
                setTimeout(() => alert.remove(), 500);
            }, 5000);
        });
    </script>
</body>
</html>