<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Edremit Moda Gözlük | Dünyayı Tarzınla Gör' }}</title>
    <meta name="description" content="{{ $description ?? 'Edremit\'in en trend ve profesyonel güneş gözlüğü butiği. Yeni sezon fırsatlarını kaçırmayın.' }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>

    @if(isset($schema))
        {!! $schema !!}
    @endif
</head>
<body class="font-sans antialiased text-gray-800 bg-gray-50 flex flex-col min-h-screen">

    <x-partials.topbar />

    <x-partials.navbar />

    <main class="flex-grow">
        {{ $slot }}
    </main>

<x-partials.whatsapp-button />

</body>
</html>
