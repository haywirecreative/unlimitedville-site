<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>{{ $title ?? 'Unlimitedville - Wireless Home Internet' }}</title>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='6' fill='%2355b685'/%3E%3Cpath d='M6 10s2.8 0 2.8 3.3v7.3s-.2 6.6 5.7 6.6 5.9-6.6 5.9-6.6 0-4.3 0-7.2c0-3.2 2.8-3.4 2.8-3.4v10.6s.3 9.2-8.7 9.2-8.5-9.2-8.5-9.2z' fill='white'/%3E%3C/svg%3E" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans bg-brand-black overflow-x-hidden antialiased">
    <div id="app-frame">
        <x-nav />
        {{ $slot }}
        <x-footer />
        <x-sticky-bar />
    </div>
    @livewireScripts
    <script>
    (function(){
        var k = "{{ config('services.google_maps.key', '') }}";
        if(k && k !== ""){
            var s = document.createElement("script");
            s.src = "https://maps.googleapis.com/maps/api/js?key="+k+"&libraries=places&loading=async";
            s.async = true; s.defer = true;
            document.head.appendChild(s);
        }
    })();
    </script>
</body>
</html>
