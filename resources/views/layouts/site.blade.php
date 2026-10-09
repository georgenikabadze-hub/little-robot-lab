<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Little Robot Lab</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen flex flex-col bg-slate-50 font-sans text-slate-800 antialiased break-words">
        <header class="border-b border-slate-200 bg-white">
            <div class="max-w-6xl mx-auto px-6 py-5 flex flex-col gap-5 md:flex-row md:items-center md:justify-between">
                <a href="{{ route('home') }}" class="flex items-center gap-3 font-bold text-xl text-slate-900">
                    <span class="rounded-xl bg-teal-700 px-3 py-2 text-sm text-white" aria-hidden="true">LR</span>
                    Little Robot Lab
                </a>
                <nav aria-label="Main navigation" class="flex flex-wrap gap-5 text-sm font-semibold">
                    @foreach($menu as $item)
                        <a href="{{ $item['link'] }}" class="py-2 hover:text-teal-700 hover:underline">{{ $item['label'] }}</a>
                    @endforeach
                </nav>
            </div>
        </header>

        <main class="max-w-6xl w-full mx-auto px-6 py-10 flex-1">
            {{ $slot }}
        </main>

        <footer class="border-t border-slate-200 bg-white">
            <div class="max-w-6xl mx-auto px-6 py-6 flex flex-col gap-2 sm:flex-row sm:justify-between text-sm text-slate-600">
                <p class="font-semibold text-slate-900">Little Robot Lab</p>
                <p>Small robotics projects for parents and kids.</p>
            </div>
        </footer>
    </body>
</html>
