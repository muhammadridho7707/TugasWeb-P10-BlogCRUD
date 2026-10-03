@extends('layouts.master')

@section('content')
<div class="bg-white p-6 rounded shadow">
    <h2 class="text-2xl mb-4">Edit Post</h2>
    
    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf 
        @method('PUT')
        
        <div class="mb-4">
            <label class="block mb-1">Judul</label>
            <input type="text" name="title" value="{{ old('title', $post->title) }}" class="border w-full p-2 rounded">
            @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block mb-1">Konten</label>
            <textarea name="content" class="border w-full p-2 rounded h-32">{{ old('content', $post->content) }}</textarea>
            @error('content') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block mb-1">Gambar (Opsional)</label>
            @if($post->image)
                <img src="{{ asset('storage/'.$post->image) }}" alt="Gambar" class="h-32 mb-2 object-cover rounded">
            @endif
            <input type="file" name="image" class="border w-full p-2 rounded">
            @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
        <a href="{{ route('posts.index') }}" class="ml-2 text-gray-600">Batal</a>
    </form>
</div>
@endsection