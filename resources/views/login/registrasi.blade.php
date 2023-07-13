<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <title>{{ $title }} | TracerStudy FMIPA</title>
</head>

<body class="">
    <section class="bg-primary">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto h-screen lg:py-0">
            <a href="/" class="flex items-cente mb-5">
                <img src="/images/logots.png" class="w-80">
            </a>
            <div class="w-full bg-white rounded-lg shadow  md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1
                        class="text-center  md:text-left text-xl font-bold leading-tight tracking-tight text-navy md:text-2xl">
                        Halaman Daftar
                    </h1>

                    <form class="space-y-3" action="{{ url('store-user') }}" method="POST">
                        @csrf
                        <div>
                            <label for="username" class=" mb-2 text-sm font-medium text-gray-900 flex items-center">Nama
                                Pengguna Alumni<button data-popover-target="popover-description"
                                    data-popover-placement="bottom-end" type="button"><svg
                                        class="w-4 h-4 ml-2 text-gray-400 hover:text-gray-500" aria-hidden="true"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                            clip-rule="evenodd"></path>
                                    </svg></button></label>
                            <div data-popover id="popover-description" role="tooltip"
                                class="absolute z-10 invisible inline-block text-sm font-light text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                                <div class="p-3 space-y-2">
                                    <p>Tip: Gunakan nama pengguna yang singkat dan mudah diingat.</p>
                                    <p>Contoh: putra24</p>
                                    <p>Note: Akan digunakan pada saat login</p>
                                </div>
                                <div data-popper-arrow></div>
                            </div>
                            <input type="text" name="username" id="username"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                placeholder="masukkan nama pengguna" required>
                        </div>

                        <div>
                            <label for="namalengkap" class="block mb-2 text-sm font-medium text-gray-900 ">Nama
                                Lengkap Alumni</label>
                            <input type="text" name="namalengkap" id="namalengkap"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                placeholder="masukkan nama lengkap" required>
                        </div>

                        <div class="flex gap-4 justify-between">
                            <div class="w-1/2">
                                <label for="prodi"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alumni Program
                                    Studi</label>
                                <select id="prodi" name="prodi"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option selected>Pilih program studi</option>
                                    <option value="Statistika">Statistika</option>
                                    <option value="Matematika">Matematika</option>
                                </select>
                            </div>
                            <div class="w-1/2">
                                <label for="tahunlulus" class="block mb-2 text-sm font-medium text-gray-900 ">Tahun Lulus</label>
                                <input type="text" name="tahunlulus" id="tahunlulus"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                    placeholder="contoh: 2019" required>
                            </div>
                        </div>


                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Kata
                                Sandi</label>
                            <input type="password" name="password" id="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                                placeholder="masukkan kata sandi" required>
                        </div>

                        <button type="submit"
                            class="w-full text-white bg-secondary hover:bg-[#ff8c1b] focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Masuk</button>
                        <p class="text-sm font-light text-gray-500 ">
                            Sudah punya akun? <a href="/masuk"
                                class="font-medium text-primary hover:underline">Masuk</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://flowbite.com/docs/flowbite.js?v=1.5.5a"></script>
</body>

</html>
