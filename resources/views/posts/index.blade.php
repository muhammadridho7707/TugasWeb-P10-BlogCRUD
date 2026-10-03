@extends('layouts.master')

@section('content')
<div class="flex justify-between items-center mb-4">
    <a href="{{ route('posts.create') }}" class="bg-green-600 text-white px-4 py-2 rounded shadow hover:bg-green-700">Tambah Post</a>
    
    <form action="{{ route('posts.index') }}" method="GET" class="flex">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari..." class="border p-2 rounded-l w-64">
        <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded-r">Cari</button>
    </form>
</div>

<div>
    @forelse ($posts as $post)
        <x-card :post="$post" />
    @empty
        <div class="bg-white p-4 rounded shadow text-center text-gray-500">Tidak ada data post.</div>
    @endforelse
</div>

<div class="mt-4">
    {{ $posts->links() }}
</div>
@endsection