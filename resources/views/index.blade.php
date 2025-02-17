<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farras' Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800 h-screen">
    <nav class="flex justify-between px-10 py-6 items-center bg-white shadow-md sticky top-0 z-50">
        <h1 class="text-2xl font-semibold">Farras</h1>
        <ul class="flex space-x-6 text-gray-600">
            <li class="cursor-pointer hover:text-black transition-colors" id="HomeNav">Home</li>
            <li class="cursor-pointer hover:text-black transition-colors" id="AboutNav">About</li>
            <li class="cursor-pointer hover:text-black transition-colors" id="ContactNav">Contact</li>
        </ul>
    </nav>

    <div id="result" class="flex justify-center items-center min-h-[calc(100vh-6rem)]"></div>

    <script>
        const loadContent = (url) => {
            fetch(url)
                .then(response => response.text())
                .then(data => {
                    document.getElementById('result').innerHTML = data;
                });
        };

        document.getElementById('HomeNav').addEventListener('click', () => loadContent('/home'));
        document.getElementById('AboutNav').addEventListener('click', () => loadContent('/about'));
        document.getElementById('ContactNav').addEventListener('click', () => loadContent('/contact'));
    </script>
</body>

</html>