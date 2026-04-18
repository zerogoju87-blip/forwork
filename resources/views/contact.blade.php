<!-- @extends('layouts.app')

@section('content')
<h2 class="text-2xl font-bold mb-6">Contact Me</h2>

@if(session('success'))
    <div class="bg-green-200 p-3 mb-4">
        {{ session('success') }}
    </div>
@endif

<form method="POST" action="/contact" class="space-y-4">
    @csrf

    <input type="text" name="name" placeholder="Your Name"
        class="w-full p-2 border rounded">

    <input type="email" name="email" placeholder="Your Email"
        class="w-full p-2 border rounded">

    <textarea name="message" placeholder="Message"
        class="w-full p-2 border rounded"></textarea>

    <button class="bg-blue-500 text-white px-6 py-2 rounded">
        Send Message
    </button>
</form>
@endsection -->