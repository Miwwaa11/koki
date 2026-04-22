<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Alfin Aquatic</title>
</head>

<body class="dark:bg-gray-900 dark:text-white"> <!-- Added dark classes -->

<nav class="dark:bg-gray-800 dark:border-t-gray-700 dark:shadow-lg"> <!-- Added dark classes -->
    <a href="/" class="dark:text-gray-300 dark:hover:bg-gray-700">Home</a>
    <a href="/ikan" class="dark:text-gray-300 dark:hover:bg-gray-700">Ikan</a>
    <a href="/galeri" class="dark:text-gray-300 dark:hover:bg-gray-700">Galeri</a>
    <a href="/kontak" class="dark:text-gray-300 dark:hover:bg-gray-700">Kontak</a>
</nav>

<hr class="dark:bg-gray-700"> <!-- Added dark class -->

<div>
    @yield('content')
</div>

<hr class="dark:bg-gray-700"> <!-- Added dark class -->

<footer class="dark:bg-gray-800 dark:text-gray-200"> <!-- Added dark classes -->
    © 2026 Alfin Aquatic
</footer>

</body>
</html>
