
@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="flex flex-col min-h-screen">
    <nav class="bg-teal-600 shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-white">ToDoList</div>
            <div>
                <a href="#" class="text-white rounded hover:text-teal-700 mx-2">Home</a>
                <a href="#" class="text-white rounded hover:text-teal-700 mx-2">About</a>
                <a href="#" class="text-white rounded hover:text-teal-700 mx-2">Contact</a>
            </div>
        </div>
    </nav>

    <div class="flex flex-1">
        <!-- Sidebar -->
        <div id="sidebar" class="bg-teal-600 text-white flex flex-col w-64">
            <aside class="flex-1 flex flex-col p-6 space-y-4">
                <h2 class="text-2xl font-bold mb-6">Sidebar</h2>
                <nav class="flex-1">
                    <ul class="space-y-2">
                        <li><a href="#" class="block py-2 px-4 rounded hover:bg-teal-700">Dashboard</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded hover:bg-teal-700">Tasks</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded hover:bg-teal-700">Settings</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded hover:bg-teal-700">Logout</a></li>
                    </ul>
                </nav>
            </aside>
        </div>

        <!-- Main Content -->
        <main class="flex-1 p-10 bg-sky-100 min-h-full">
            <h1 class="text-3xl font-bold mb-4">Selamat Datang di ToDoList!</h1>
            <p class="text-gray-700">Ini adalah area konten utama. Silakan tambahkan konten di sini.</p>
        </main>
    </div>
</div>
