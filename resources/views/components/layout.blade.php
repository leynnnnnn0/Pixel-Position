<!doctype html>
<html lang="en" class="h-full font-hanken-grotesk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..600;1,100..600&display=swap" rel="stylesheet">
    @vite('resources/js/app.js')
    <title>Pixel Position</title>
</head>
<body class="h-full bg-black text-white">
    <div class="px-10">
        <x-nav/>
        <main class="mt-12 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
