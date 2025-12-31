@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="flex min-h-screen">
    <!-- Sidebar -->
    <div id="sidebar" class="">
        <aside class="w-64 bg-blue-900 flex flex-col p-6 space-y-4 h-full bg-blue-800">
            <h2 class="text-2xl font-bold mb-6">Sidebar</h2>
            <nav class="flex-1">
                <ul class="space-y-2">
                    <li><a href="#" class="block py-2 px-4 rounded ">Dashboard</a></li>
                    <li><a href="#" class="block py-2 px-4 rounded ">Tasks</a></li>
                    <li><a href="#" class="block py-2 px-4 rounded ">Settings</a></li>
                    <li><a href="#" class="block py-2 px-4 rounded ">Logout</a></li>
                </ul>
            </nav>
        </aside>
    </div>


    <!-- Main Content -->
    <main class="flex-1 p-10 bg-gray-50">
        <h1 class="text-3xl font-bold mb-4">Selamat Datang di ToDoList!</h1>
        <p class="text-gray-700">Ini adalah area konten utama. Silakan tambahkan konten di sini.</p>
    </main>
</div>
