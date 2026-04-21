@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="py-20 px-6 bg-gradient-to-r from-blue-50 to-white">
                <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center text-center md:text-left">
        <!-- TEXT -->
        <div>
            <h1 data-aos="fade-right" class="text-4xl md:text-5xl font-bold mb-4">
                Hi, I'm <span class="text-blue-500">King Anthony Suarez</span> 👋
            </h1>

            <p data-aos="fade-right" data-aos-delay="200"
               class="text-gray-600 text-lg mb-6">
                Aspiring IT professional focused on web development and digital marketing.
            </p>

            <a href="#projects"
               class="bg-blue-500 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-600 transition">
               View My Projects
            </a>
        </div>

        <!-- IMAGE -->
        <div data-aos="zoom-in" class="flex justify-center"> 
            <img src="{{ asset('image/2x2.jpg') }}" 
            class="w-72 h-72 object-cover rounded-full shadow-xl border-4 border-white"> 
        </div>

    </div>
</section>

<!-- ABOUT -->
<section class="py-20 px-6 max-w-5xl mx-auto text-center " id="about">
    <h2 class="text-3xl font-bold mb-6">About Me</h2>

    <p class="text-gray-600 text-lg leading-relaxed">
        I am an aspiring IT professional with experience in web development, particularly in building dynamic websites using PHP, MySQL, HTML, CSS, and JavaScript. I am passionate about creating user-friendly systems and continuously improving my technical and problem-solving skills. I am also interested in digital marketing and how websites can be optimized to attract and engage users.
    </p>
</section>

<!-- SKILLS -->
<section class="py-20 bg-gray-50 px-6" id="skills">
    <h2 class="text-3xl font-bold text-center mb-10">Skills</h2>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto text-center">

        <div data-aos="fade-up" class="bg-white p-6 rounded-xl shadow">
            💻 Web Development <br>(PHP, MySQL)
        </div>

        <div data-aos="fade-up" data-aos-delay="200" class="bg-white p-6 rounded-xl shadow">
            🎨 Frontend <br>(HTML, CSS, JS)
        </div>

        <div data-aos="fade-up" data-aos-delay="400" class="bg-white p-6 rounded-xl shadow">
            📈 SEO & Digital Marketing
        </div>

        <div data-aos="fade-up" class="bg-white p-6 rounded-xl shadow">
            🗄️ Database Management
        </div>

        <div data-aos="fade-up" data-aos-delay="200" class="bg-white p-6 rounded-xl shadow">
            🛠️ Debugging & Troubleshooting
        </div>

        <div data-aos="fade-up" data-aos-delay="400" class="bg-white p-6 rounded-xl shadow">
            📱 Responsive Design
        </div>

    </div>
</section>

<!-- PROJECTS -->
<section id="projects" class="py-20 px-6">
    <h2 class="text-3xl font-bold text-center mb-12">Projects</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">

        <!-- ECOMMERCE -->
        <div data-aos="fade-up" class="bg-white p-6 rounded-xl shadow hover:shadow-xl transition">
            <h3 class="font-bold text-lg mb-2">🛒 E-commerce Website</h3>
            <ul class="text-gray-600 text-sm space-y-1">
                <li>✔ Cart and checkout system</li>
                <li>✔ Dynamic quantity updates</li>
                <li>✔ Inventory and order management</li>
                <li>✔ Order tracking system</li>
            </ul>
        </div>

        <!-- DASHBOARD -->
        <div data-aos="fade-up" data-aos-delay="200"
             class="bg-white p-6 rounded-xl shadow hover:shadow-xl transition">
            <h3 class="font-bold text-lg mb-2">📊 Data Dashboard</h3>
            <ul class="text-gray-600 text-sm space-y-1">
                <li>✔ Chart.js integration</li>
                <li>✔ Responsive layout</li>
                <li>✔ Improved data readability</li>
            </ul>
        </div>

        <!-- AUTH -->
        <div data-aos="fade-up" data-aos-delay="400"
             class="bg-white p-6 rounded-xl shadow hover:shadow-xl transition">
            <h3 class="font-bold text-lg mb-2">🔐 Auth System</h3>
            <ul class="text-gray-600 text-sm space-y-1">
                <li>✔ Login & registration</li>
                <li>✔ Secure password handling</li>
                <li>✔ Password reset with expiration</li>
            </ul>
        </div>

    </div>
</section>

<!-- EXPERIENCE -->
    <section class="py-20 px-6 max-w-4xl mx-auto text-center md:text-left">
        <h2 class="text-3xl font-bold mb-6 text-center">Experience</h2>

    <div class="bg-white p-6 rounded-xl shadow">
        <h3 class="font-bold">Freelance / Personal Projects</h3>
        <ul class="text-gray-600 mt-2 space-y-1 text-sm">
            <li>✔ Developed web-based systems</li>
            <li>✔ Debugged and improved performance</li>
            <li>✔ Applied SEO techniques</li>
        </ul>
    </div>
</section>

<!-- CONTACT -->
<section class="py-20 px-6 max-w-4xl mx-auto" id="contact">
    <h2 class="text-3xl font-bold mb-8 text-center">Contact</h2>

    <div class="text-center mb-6 text-gray-600">
        <p><b>Email:</b> suarezkinganthony@email.com</p>
        <p><b>Phone:</b> 09564769949</p>

    </div>

</section>

@endsection
