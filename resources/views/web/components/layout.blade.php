<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>Web</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-gray-100">
    <div class="flex flex-col min-h-screen">
        
        {{-- header --}}
        @include('web.partials.header')
        
        {{-- navbar --}}
        @include('web.partials.navbar')

        {{-- content --}}
        <main class="grow">
            <div class="max-w-screen-xl px-4 mx-auto">
                {{ $slot }}
            </div>
        </main>

        {{-- feature section --}}
        @include('web.partials.feature-section')

        {{-- newsletter section --}}
        @include('web.partials.newsletter-section')

        {{-- footer --}}
        @include('web.partials.footer')
    </div>
</body>

</html>
