@props(['post'])

<div class="bg-white p-4 rounded shadow mb-4 flex justify-between items-center">
    <div>
        <h2 class="text-xl font-bold text-gray-800">{{ $post->title }}</h2>
        <p class="text-gray-600 truncate w-64">{{ $post->content }}</p>
    </div>
    <div class="flex space-x-2">
        <a href="{{ route('posts.show', $post->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded">Lihat</a>
        <a href="{{ route('posts.edit', $post->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
        
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Hapus data?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</button>
        </form>
    </div>
</div>