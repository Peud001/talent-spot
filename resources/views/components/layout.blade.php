<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Talent Spot</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-blackBg text-white pb-10">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>logo</div>
            <div class="space-x-6 font-semibold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>
            @auth
            <div>
                <a href="/jobs/create">Post a Job</a>
            </div>
            @endauth
            <a href="/register">Sign Up</a>
            <a href="/login">Log In</a>
            @guest
                
            @endguest
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>