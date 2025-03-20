<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kimbberly Jihay - Portfolio</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body class="font-[Poppins] bg-gray-100">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="#" class="text-xl font-semibold text-gray-800">KJ</a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-gray-600 hover:text-gray-900">Home</a>
                    <a href="#about" class="text-gray-600 hover:text-gray-900">About</a>
                    <a href="#projects" class="text-gray-600 hover:text-gray-900">Projects</a>
                    <a href="#contact" class="text-gray-600 hover:text-gray-900">Contact</a>
                    <?php if (isLoggedIn()): ?>
                        <a href="dashboard.php" class="text-blue-600 hover:text-blue-800">Dashboard</a>
                        <a href="logout.php" class="text-red-600 hover:text-red-800">Logout</a>
                    <?php else: ?>
                        <a href="login.php" class="text-blue-600 hover:text-blue-800">Login</a>
                    <?php endif; ?>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="mobile-menu-button">
                        <i class="fas fa-bars text-gray-600 text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu -->
        <div class="mobile-menu hidden md:hidden">
            <a href="#home" class="block py-2 px-4 text-sm hover:bg-gray-200">Home</a>
            <a href="#about" class="block py-2 px-4 text-sm hover:bg-gray-200">About</a>
            <a href="#projects" class="block py-2 px-4 text-sm hover:bg-gray-200">Projects</a>
            <a href="#contact" class="block py-2 px-4 text-sm hover:bg-gray-200">Contact</a>
            <?php if (isLoggedIn()): ?>
                <a href="dashboard.php" class="block py-2 px-4 text-sm hover:bg-gray-200 text-blue-600">Dashboard</a>
                <a href="logout.php" class="block py-2 px-4 text-sm hover:bg-gray-200 text-red-600">Logout</a>
            <?php else: ?>
                <a href="login.php" class="block py-2 px-4 text-sm hover:bg-gray-200 text-blue-600">Login</a>
            <?php endif; ?>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-20 md:pt-32 pb-20 bg-gradient-to-r from-blue-500 to-purple-600">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center text-white">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">Kimbberly Jihay</h1>
                <p class="text-xl md:text-2xl mb-8">Web Developer & Designer</p>
                <a href="#contact" class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition duration-300">Get in Touch</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">About Me</h2>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-4">
                    <p class="text-gray-600 leading-relaxed">
                        Hello! I'm Kimbberly Jihay, a passionate web developer and designer with a keen eye for creating beautiful, functional websites. With expertise in modern web technologies, I bring ideas to life through clean code and intuitive design.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        My journey in web development started with a curiosity for creating engaging digital experiences. Today, I specialize in building responsive websites that not only look great but also deliver exceptional user experiences.
                    </p>
                </div>
                <div class="text-center">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-4 bg-gray-50 rounded-lg">
                            <i class="fas fa-code text-3xl text-blue-600 mb-2"></i>
                            <h3 class="font-semibold">Web Development</h3>
                        </div>
                        <div class="p-4 bg-gray-50 rounded-lg">
                            <i class="fas fa-palette text-3xl text-purple-600 mb-2"></i>
                            <h3 class="font-semibold">Web Design</h3>
                        </div>
                        <div class="p-4 bg-gray-50 rounded-lg">
                            <i class="fas fa-mobile-alt text-3xl text-green-600 mb-2"></i>
                            <h3 class="font-semibold">Responsive Design</h3>
                        </div>
                        <div class="p-4 bg-gray-50 rounded-lg">
                            <i class="fas fa-search text-3xl text-red-600 mb-2"></i>
                            <h3 class="font-semibold">SEO</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-gray-100">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">My Projects</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="https://via.placeholder.com/400x300" alt="Project 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2">E-commerce Website</h3>
                        <p class="text-gray-600 mb-4">A fully responsive e-commerce platform built with modern technologies.</p>
                        <a href="#" class="text-blue-600 hover:text-blue-800">View Project →</a>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="https://via.placeholder.com/400x300" alt="Project 2" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2">Portfolio Design</h3>
                        <p class="text-gray-600 mb-4">A creative portfolio website showcasing artist works.</p>
                        <a href="#" class="text-blue-600 hover:text-blue-800">View Project →</a>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="https://via.placeholder.com/400x300" alt="Project 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-2">Blog Platform</h3>
                        <p class="text-gray-600 mb-4">A modern blog platform with a clean, minimalist design.</p>
                        <a href="#" class="text-blue-600 hover:text-blue-800">View Project →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Get in Touch</h2>
            <div class="max-w-xl mx-auto">
                <form action="#" method="POST" class="space-y-6">
                    <div>
                        <label for="name" class="block text-gray-700 mb-2">Name</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="message" class="block text-gray-700 mb-2">Message</label>
                        <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-center md:text-left mb-4 md:mb-0">
                    <h3 class="text-xl font-semibold">Kimbberly Jihay</h3>
                    <p class="text-gray-400">Web Developer & Designer</p>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="hover:text-blue-400"><i class="fab fa-twitter text-2xl"></i></a>
                    <a href="#" class="hover:text-blue-400"><i class="fab fa-linkedin text-2xl"></i></a>
                    <a href="#" class="hover:text-blue-400"><i class="fab fa-github text-2xl"></i></a>
                    <a href="#" class="hover:text-blue-400"><i class="fab fa-instagram text-2xl"></i></a>
                </div>
            </div>
            <div class="text-center mt-8">
                <p class="text-gray-400">&copy; <?php echo date('Y'); ?> Kimbberly Jihay. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>