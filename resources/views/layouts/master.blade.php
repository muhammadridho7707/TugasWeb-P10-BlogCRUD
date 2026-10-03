<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog CRUD</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold mb-6 text-center text-blue-600">Ridosaurus - Blog CRUD</h1>
        
        @if(session('success'))
            <x-alert type="success" :message="session('success')" />
        @endif

        @yield('content')
    </div>
</body>
</html>