<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kimberly Jihay - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        .gradient-text {
            background: linear-gradient(to right, #3B82F6, #8B5CF6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="font-[Poppins] bg-gray-100">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="#" class="text-xl font-semibold gradient-text">KJ</a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-gray-600 hover:text-gray-900">Home</a>
                    <a href="#about" class="text-gray-600 hover:text-gray-900">About</a>
                    <a href="#education" class="text-gray-600 hover:text-gray-900">Education</a>
                    <a href="#skills" class="text-gray-600 hover:text-gray-900">Skills</a>
                    <a href="#contact" class="text-gray-600 hover:text-gray-900">Contact</a>
                    <?php if (isLoggedIn()): ?>
                        <a href="dashboard.php" class="text-blue-600 hover:text-blue-800">Dashboard</a>
                        <a href="logout.php" class="text-red-600 hover:text-red-800">Logout</a>
                    <?php else: ?>
                        <a href="login.php" class="text-blue-600 hover:text-blue-800">Login</a>
                    <?php endif; ?>
                </div>
                <div class="md:hidden flex items-center">
                    <button class="mobile-menu-button">
                        <i class="fas fa-bars text-gray-600 text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="mobile-menu hidden md:hidden">
            <a href="#home" class="block py-2 px-4 text-sm hover:bg-gray-200">Home</a>
            <a href="#about" class="block py-2 px-4 text-sm hover:bg-gray-200">About</a>
            <a href="#education" class="block py-2 px-4 text-sm hover:bg-gray-200">Education</a>
            <a href="#skills" class="block py-2 px-4 text-sm hover:bg-gray-200">Skills</a>
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
    <section id="home" class="min-h-screen pt-20 bg-gradient-to-r from-blue-500 to-purple-600 flex items-center">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between gap-12">
                <div class="text-center md:text-left text-white md:w-1/2">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6">Kimberly Jihay</h1>
                    <p class="text-xl md:text-2xl mb-8">Information Technology Student</p>
                    <div class="flex flex-wrap gap-4 justify-center md:justify-start">
                        <a href="#contact" class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition duration-300">Get in Touch</a>
                        <a href="#about" class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-blue-600 transition duration-300">Learn More</a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <div class="relative">
                        <div class="w-64 h-64 bg-white rounded-full overflow-hidden shadow-2xl border-4 border-white">
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-purple-500 opacity-90"></div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <span class="text-6xl text-white font-bold">KJ</span>
                            </div>
                        </div>
                        <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2">
                            <div class="flex gap-4">
                                <a href="mailto:kimmyjihay@gmail.com" class="bg-white p-3 rounded-full shadow-lg hover:bg-gray-100 transition duration-300">
                                    <i class="fas fa-envelope text-blue-600"></i>
                                </a>
                                <a href="#" class="bg-white p-3 rounded-full shadow-lg hover:bg-gray-100 transition duration-300">
                                    <i class="fab fa-linkedin text-blue-600"></i>
                                </a>
                                <a href="#" class="bg-white p-3 rounded-full shadow-lg hover:bg-gray-100 transition duration-300">
                                    <i class="fab fa-github text-blue-600"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
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
                        Hello! I'm Kimberly Jihay, an Information Technology student at Western Mindanao State University. I'm passionate about technology and software development, with expertise in various programming languages and problem-solving.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Based in Zamboanga City, Philippines, I bring a unique perspective to technology solutions, combining technical skills with effective communication in multiple languages including English, Tagalog, Bisaya, and Chavacano.
                    </p>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="p-6 bg-gray-50 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <i class="fas fa-code text-3xl text-blue-600 mb-4"></i>
                        <h3 class="font-semibold text-lg mb-2">Programming</h3>
                        <p class="text-gray-600">Proficient in C++, Python, and Java</p>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <i class="fas fa-laptop-code text-3xl text-purple-600 mb-4"></i>
                        <h3 class="font-semibold text-lg mb-2">System Servicing</h3>
                        <p class="text-gray-600">Computer maintenance and troubleshooting</p>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <i class="fas fa-comments text-3xl text-green-600 mb-4"></i>
                        <h3 class="font-semibold text-lg mb-2">Communication</h3>
                        <p class="text-gray-600">Multilingual with strong interpersonal skills</p>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <i class="fas fa-puzzle-piece text-3xl text-red-600 mb-4"></i>
                        <h3 class="font-semibold text-lg mb-2">Problem Solving</h3>
                        <p class="text-gray-600">Analytical thinking and creative solutions</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="py-20 bg-gray-100">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Educational Background</h2>
            <div class="space-y-8">
                <!-- Tertiary -->
                <div class="bg-white p-6 rounded-lg shadow-lg transform hover:-translate-y-1 transition duration-300">
                    <div class="flex items-start">
                        <div class="p-3 bg-blue-100 rounded-lg mr-4">
                            <i class="fas fa-graduation-cap text-2xl text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-blue-600 mb-2">Bachelor of Science in Information Technology</h3>
                            <p class="text-gray-600">Western Mindanao State University</p>
                            <p class="text-gray-500">Normal Road, Baliwasan, Zamboanga City</p>
                            <p class="text-gray-500">2025</p>
                        </div>
                    </div>
                </div>
                <!-- Senior High -->
                <div class="bg-white p-6 rounded-lg shadow-lg transform hover:-translate-y-1 transition duration-300">
                    <div class="flex items-start">
                        <div class="p-3 bg-purple-100 rounded-lg mr-4">
                            <i class="fas fa-school text-2xl text-purple-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-purple-600 mb-2">Senior High School - Computer System Servicing (CSS)</h3>
                            <p class="text-gray-600">Zamboanga Peninsula Polytechnic State University</p>
                            <p class="text-gray-500">Chico Road, Baliwasan, Zamboanga City</p>
                            <p class="text-gray-500">2022</p>
                        </div>
                    </div>
                </div>
                <!-- Junior High -->
                <div class="bg-white p-6 rounded-lg shadow-lg transform hover:-translate-y-1 transition duration-300">
                    <div class="flex items-start">
                        <div class="p-3 bg-green-100 rounded-lg mr-4">
                            <i class="fas fa-school text-2xl text-green-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-green-600 mb-2">Junior High School</h3>
                            <p class="text-gray-600">Sinunuc National High School</p>
                            <p class="text-gray-500">Sinunuc, Zamboanga City</p>
                            <p class="text-gray-500">2020</p>
                        </div>
                    </div>
                </div>
                <!-- Primary -->
                <div class="bg-white p-6 rounded-lg shadow-lg transform hover:-translate-y-1 transition duration-300">
                    <div class="flex items-start">
                        <div class="p-3 bg-red-100 rounded-lg mr-4">
                            <i class="fas fa-school text-2xl text-red-600"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-red-600 mb-2">Primary Education</h3>
                            <p class="text-gray-600">Sinunuc Elementary School</p>
                            <p class="text-gray-500">Sinunuc, Zamboanga City</p>
                            <p class="text-gray-500">2016</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Skills & Expertise</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Technical Skills -->
                <div class="space-y-6">
                    <h3 class="text-2xl font-semibold mb-4">Technical Skills</h3>
                    <div class="space-y-4">
                        <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                            <div class="flex items-center mb-4">
                                <i class="fas fa-code text-2xl text-blue-600 mr-3"></i>
                                <h4 class="font-semibold text-lg">Programming Languages</h4>
                            </div>
                            <p class="text-gray-600">C++, Python, Java (Mid-level)</p>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                            <div class="flex items-center mb-4">
                                <i class="fas fa-laptop text-2xl text-purple-600 mr-3"></i>
                                <h4 class="font-semibold text-lg">Computer Skills</h4>
                            </div>
                            <p class="text-gray-600">Computer Literate, System Servicing</p>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                            <div class="flex items-center mb-4">
                                <i class="fas fa-brain text-2xl text-green-600 mr-3"></i>
                                <h4 class="font-semibold text-lg">Problem Solving</h4>
                            </div>
                            <p class="text-gray-600">Analytical Thinking, Technical Troubleshooting</p>
                        </div>
                    </div>
                </div>
                <!-- Language Skills -->
                <div class="space-y-6">
                    <h3 class="text-2xl font-semibold mb-4">Language Skills</h3>
                    <div class="space-y-4">
                        <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                            <h4 class="font-semibold text-lg mb-3">English</h4>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 95%"></div>
                            </div>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                            <h4 class="font-semibold text-lg mb-3">Tagalog</h4>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-purple-600 h-2.5 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                            <h4 class="font-semibold text-lg mb-3">Bisaya</h4>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-green-600 h-2.5 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                            <h4 class="font-semibold text-lg mb-3">Chavacano</h4>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-red-600 h-2.5 rounded-full" style="width: 95%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-100">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Get in Touch</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Contact Information -->
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold mb-6">Contact Information</h3>
                    <div class="space-y-6">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-phone text-blue-600"></i>
                            </div>
                            <div>
                                <p class="text-gray-600 font-medium">Phone</p>
                                <p class="text-gray-800">+639925746941</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-envelope text-purple-600"></i>
                            </div>
                            <div>
                                <p class="text-gray-600 font-medium">Email</p>
                                <p class="text-gray-800">kimmyjihay@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-map-marker-alt text-green-600"></i>
                            </div>
                            <div>
                                <p class="text-gray-600 font-medium">Address</p>
                                <p class="text-gray-800">Purok 5, Solis Drive, Sinunuc<br>Zamboanga City<br>Zamboanga del Sur, Philippines, 7000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact Form -->
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <form action="#" method="POST" class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                        </div>
                        <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white py-3 px-6 rounded-lg font-semibold hover:opacity-90 transition duration-300">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-center md:text-left mb-8 md:mb-0">
                    <h3 class="text-2xl font-bold gradient-text">Kimberly Jihay</h3>
                    <p class="text-gray-400 mt-2">Information Technology Student</p>
                </div>
                <div class="flex space-x-6">
                    <a href="mailto:kimmyjihay@gmail.com" class="hover:text-blue-400 transition duration-300">
                        <i class="fas fa-envelope text-2xl"></i>
                    </a>
                    <a href="#" class="hover:text-blue-400 transition duration-300">
                        <i class="fab fa-linkedin text-2xl"></i>
                    </a>
                    <a href="#" class="hover:text-blue-400 transition duration-300">
                        <i class="fab fa-github text-2xl"></i>
                    </a>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center">
                <p class="text-gray-400">&copy; <?php echo date('Y'); ?> Kimberly Jihay. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>