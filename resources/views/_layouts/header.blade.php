<header class="flex items-center justify-between px-6 py-4 ">
    <div class="flex items-center">
        <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>


    </div>

    <div class="flex items-center gap-3">

        <div class="text-navy text-sm hidden md:block">
            👋 <span class="font-medium ">Selamat Datang,</span> {{ auth()->user()->namalengkap }}
        </div>

      


        <div x-data="{ dropdownOpen: false }" class="relative">



            <button @click="dropdownOpen = ! dropdownOpen"
                class="flex">
                <img src="{{ asset('/images/foto/'.auth()->user()->foto) }}" class="w-10 h-10 rounded-full  bg-cover object-cover">
            </button>
            {{-- <button @click="dropdownOpen = ! dropdownOpen" class="relative block w-10 h-10 overflow-hidden rounded-full shadow focus:outline-none border-2  border-primary bg-cover">
                <img class="object-cover w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=296&q=80" alt="Your avatar">
            </button> --}}

            <div x-cloak x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-x-0 mx-auto inset-0 z-10 w-full h-full">
            </div>

            <div x-cloak x-show="dropdownOpen"
                class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl">
                <a href="#"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a>
        
                    <form action="/logout" method="post">
                        @csrf
                    <a href="/logout"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Keluar</a>
                    </form>
                </div>
        </div>
    </div>
</header>
