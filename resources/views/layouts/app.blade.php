<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <img src="/logo-ged.png" alt="Logo GED" class="h-8">
                    <span class="ml-2 text-xl font-semibold text-gray-800">GED System</span>
                </div>
                <div class="flex items-center">
                    @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-gray-600 hover:text-blue-600 px-3 py-2">
                            Sair <i class='bx bx-log-out'></i>
                        </button>
                    </form>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <main class="py-8">
        @yield('content')
    </main>
</body>
</html>