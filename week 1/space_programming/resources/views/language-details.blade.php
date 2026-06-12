@extends('layouts.app')

@section('content')
    <main class="w-full max-w-4xl mx-auto px-6 lg:px-8 pb-12">
        <h1 class="text-2xl font-bold mb-4">{{ $language->name }}</h1>

        <p class="text-lg mb-8">{{ $language->description }}</p>

        <div class="w-64 h-64 overflow-hidden rounded-lg">
            <img src="{{ asset('assets/img/' . $language->icon) }}" alt="{{ $language->name }}" class="w-full h-full object-cover">
        </div>

        <a href="{{ route('languages.list') }}" class="inline-block mt-8 text-sm underline hover:no-underline">
            &larr; Terug naar alle talen
        </a>
    </main>
@endsection
