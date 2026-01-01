
@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="flex flex-col min-h-screen bg-sky-100">

    <div class="flex flex-1">
        <!-- Sidebar -->
        <div id="sidebar" class=" text-white flex flex-col w-64 ">          
            <aside class="flex-1 flex flex-col p-10 space-y-4 rounded-r-lg bg-teal-600">
                <h2 class="text-2xl font-bold text-center ">Your Name</h2>
                <p class="text-center mb-8 text-sm">youremail@example.com</p>
                
                <nav class="flex-1 mt-8">
                    <ul class="space-y-2">
                        <li><a href="#" class="block py-2 px-4 rounded hover:bg-teal-700">Dashboard</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded hover:bg-teal-700">My Tasks</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded hover:bg-teal-700">My Notes</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded hover:bg-teal-700">Profile</a></li>
                    </ul>
                </nav>
                <nav>
                    <ul class="space-y-2">
                        <li><a href="#" class="block py-2 px-4 rounded hover:bg-teal-700">Logout</a></li>
                    </ul>
                </nav>

            </aside>
        </div>

        <!-- Main Content -->
        <main class="flex-1 p-10 min-h-full">
            <h1 class="text-3xl font-bold mb-4">Welcome to ToDoList!</h1>
            <p class="text-gray-700">This is the main content area. Please add your content here.</p>
        </main>
    </div>
</div>
