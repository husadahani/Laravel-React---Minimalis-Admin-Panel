<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS Test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-center text-blue-500">Tailwind CSS is Working!</h1>
        <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">Card 1</h2>
                <p class="text-gray-600">This is a sample card using Tailwind CSS classes.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">Card 2</h2>
                <p class="text-gray-600">This is another sample card using Tailwind CSS classes.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">Card 3</h2>
                <p class="text-gray-600">This is a third sample card using Tailwind CSS classes.</p>
            </div>
        </div>
        <div class="mt-8 text-center">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Sample Button
            </button>
        </div>
    </div>
</body>
</html>