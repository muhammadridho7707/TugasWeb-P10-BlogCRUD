@extends('layouts.master')

@section('content')
<div class="bg-white p-6 rounded shadow text-center">
    <h2 class="text-3xl font-bold mb-4">{{ $post->title }}</h2>
    
    @if($post->image)
        <img src="{{ asset('storage/'.$post->image) }}" class="mx-auto max-h-64 object-cover rounded mb-4">
    @endif
    
    <p class="text-gray-700 text-left mb-6 whitespace-pre-wrap">{{ $post->content }}</p>
    
    <a href="{{ route('posts.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Kembali</a>
</div>
@endsection