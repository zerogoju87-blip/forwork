<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Portfolio</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="bg-gradient-to-br from-gray-50 via-white to-blue-50 text-gray-800 overflow-x-hidden">

<!-- Navbar -->
<nav class="backdrop-blur-md bg-white/70 border-b border-gray-200 fixed w-full top-0 z-50 shadow-sm">
    <div class="max-w-7xl mx-auto px-6 py-4 flex flex-wrap items-center">

        <!-- LOGO -->
        <div class="w-full md:w-1/3">
            <h1 class="font-bold text-2xl text-gray-900 tracking-wide text-center md:text-left">
                My<span class="text-blue-500">Portfolio</span>
            </h1>
        </div>

        <!-- MENU -->
        <div class="w-full md:w-1/3 flex justify-center mt-3 md:mt-0 space-x-6 md:space-x-10 text-gray-700 font-medium">

            <a href="#about" class="nav-link hover:text-blue-500 transition py-2 px-3 rounded-md">
                About
            </a>

            <a href="#projects" class="nav-link hover:text-blue-500 transition py-2 px-3 rounded-md">
                Projects
            </a>

            <a href="#contact" class="nav-link hover:text-blue-500 transition py-2 px-3 rounded-md">
                Contact
            </a>

        </div>

        <!-- BUTTON -->
        <div class="w-full md:w-1/3 flex justify-center md:justify-end mt-3 md:mt-0">
            <a href="#contact"
               class="bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-2 rounded-full font-medium shadow-md hover:shadow-lg hover:scale-105 transition">
                Hire Me
            </a>
        </div>

    </div>
</nav>

<!-- MAIN CONTENT -->
<main class="pt-29">
    @yield('content')
</main>

<!-- Footer -->
<footer class="text-center py-6 text-sm text-gray-500 border-t bg-white mt-10">
    © {{ date('Y') }} <span class="font-semibold text-gray-700">King Anthony Suarez</span>
</footer>
<script>
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
</body>
</html>