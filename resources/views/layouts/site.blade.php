<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Little Robot Lab</title>
        @vite(['resources/css/app.css', 'resources/js/app.js']) 
    </head>
<body class="bg-slate-50 text-slate-800 min-h-screen flex flex-col">
    <nav class="bg-slate-900 text-white px-6 py-4 flex gap-6 items-center">
        <span class="font-bold text-lg text-amber-400">Little Robot Lab</span>
        @foreach($menu as $item)
            <a href="{{ $item['link'] }}" class="hover:text-amber-400">{{ $item['label'] }}</a>
        @endforeach
    </nav>

    <main class="max-w-3xl w-full mx-auto p-6 flex-1">
        {{ $slot }}
    </main>

    <footer class="bg-slate-900 text-slate-400 text-center text-sm p-4">
        Little Robot Lab · projects for parents and kids
    </footer>
</body>
</html>