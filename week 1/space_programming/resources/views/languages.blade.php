@extends('layouts.app')

@section('content')
    <main class="w-full max-w-4xl mx-auto px-6 lg:px-8 pb-12">
        <h1 class="text-2xl font-bold mb-8 uppercase tracking-wide">Space Programming Languages</h1>

        <div class="space-y-10">
            @foreach ($languages as $language)
                <a href="{{ route('languages.details', $language->name) }}" class="block group">
                    <h2 class="text-xl font-bold mb-3">{{ $language->name }}</h2>
                    <div class="w-48 h-48 overflow-hidden rounded-lg group-hover:opacity-80 transition">
                        <img src="{{ asset('assets/img/' . $language->icon) }}" alt="{{ $language->name }}" class="w-full h-full object-cover">
                    </div>
                </a>
            @endforeach
        </div>
    </main>
@endsection
