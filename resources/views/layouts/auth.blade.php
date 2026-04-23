<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin Login')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: { fontFamily: { sans: ['Plus Jakarta Sans', 'ui-sans-serif', 'system-ui'] } }
            }
        };
    </script>
    <style>
        @keyframes fadeInPage {
            from { opacity: 0; transform: translateY(8px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in-page { animation: fadeInPage .6s ease-out both; }
    </style>
</head>
<body class="bg-slate-100 font-sans text-slate-800 dark:bg-slate-950 dark:text-slate-100">
    @yield('content')
</body>
</html>
