<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Portfolio</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100 text-gray-800 overflow-x-hidden">
        <!-- Navbar -->
   <nav class="bg-white shadow-sm border-b border-gray-100 fixed w-full top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <!-- LOGO -->
        <h1 class="font-bold text-xl text-gray-900 tracking-wide">
            MyPortfolio
        </h1>

        <!-- DESKTOP MENU -->
        <div class="hidden md:flex items-center space-x-8 text-gray-700 font-medium">

            <a href="#about" class="hover:text-blue-500 transition">
                About
            </a>

            <a href="#projects" class="hover:text-blue-500 transition">
                Projects
            </a>

            <a href="#contact" class="hover:text-blue-500 transition">
                Contact
            </a>

            <!-- Optional Button -->
            <a href="#contact"
               class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                Hire Me
            </a>

        </div>

        <!-- MOBILE BUTTON -->
        <button id="menu-btn" class="md:hidden text-2xl text-gray-700">
            ☰
        </button>

    </div>

    <!-- MOBILE MENU -->
    <div id="menu" class="hidden md:hidden px-6 pb-4 space-y-3 bg-white border-t">

        <a href="#about" class="block text-gray-700 hover:text-blue-500">
            About
        </a>

        <a href="#projects" class="block text-gray-700 hover:text-blue-500">
            Projects
        </a>

        <a href="#contact" class="block text-gray-700 hover:text-blue-500">
            Contact
        </a>

        <a href="#contact"
           class="block text-center bg-blue-500 text-white py-2 rounded-lg">
            Hire Me
        </a>

    </div>
</nav>

    @yield('content')

    <!-- Footer -->
    <footer class="text-center p-4 text-sm text-gray-500">
        © {{ date('Y') }} Your Name
    </footer>

</body>
</html>