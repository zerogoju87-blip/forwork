@extends('layouts.app')

@section('content')
<div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">
    @foreach($projects as $project)
    <div data-aos="fade-up"
         class="bg-white shadow rounded p-4">
        <h4 class="font-bold text-lg">{{ $project->title }}</h4>
        <p class="text-gray-600 text-sm mt-2">
            {{ $project->description }}
        </p>
    </div>
    @endforeach
</div>
@endsection