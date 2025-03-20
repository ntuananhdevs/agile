<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</head>

<body>
    @include('clients.blocks.header')

    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 h-screen fixed">
        </aside>

        <!-- Main Content -->
        <main class="flex-1">
            <div class="p-4 sm:ml-64">
                <div class="p-4 mt-14">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>

