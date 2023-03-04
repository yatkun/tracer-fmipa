<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')

    <title>Tracer Study FMIPA UNSULBAR</title>
    <style>
        .bg {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23d3cddd' fill-opacity='0.23'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
</head>

<body class="font-poppins">
    <section class="bg-primary">
        <div class="nav container mx-auto flex items-center justify-between h-20">
            <div class="flex items-center gap-4">
                <div class="flex-shrink-0 w-72"><a href="/"><img src="./images/logots.png" alt=""></a></div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4 text-base text-secondary ">
                        {{-- <a href="" class="menu active transition duration-150">Home</a>
                        <a href="" class="menu hover:bg-hover transition duration-150">About</a>
                        <a href="" class="menu hover:bg-hover transition duration-150">Contact</a> --}}
                    </div>
                </div>
            </div>


        </div>
    </section>

    <div class="container">
        @if (session('berhasil'))
        <div id="alert-3" class="mt-5 flex w-full p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor"
                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                {{ session('berhasil') }}
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300"
                data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        @endif
    </div>
    <form class="" action="{{ route('pengguna-lulusan.simpan') }}" method="POST">
        @csrf
    <section>
        <div class="mx-5 my-5">
            <div class="flex">
                <h1 class="text-xl text-center font-semibold mx-auto">Survey Kepuasan Pengguna Lulusan FMIPA UNSULBAR
                </h1>

            </div>

            <div class="space-y-5 mt-10 container text-justify text-sm">
                <p>Yth. Pengguna Lulusan FMIPA UNSULBAR</p>
                <p>Dalam rangka meningkatkan kualitas lulusan FMIPA UNSULBAR, diperlukan survey terhadap pengguna
                    lulusan sebagai salah satu indikator evaluasi perbaikan FMIPA UNSULBAR. Kami sangat
                    mengharapkan kesediaan Bapak/Ibu untuk dapat memberikan umpan balik terhadap lulusan FMIPA UNSULBAR yang bekerja di instansi atau perusahaan yang Bapak/Ibu pimpin dengan cara mengisi
                    kuisioner pengguna lulusan FMIPA UNSULBAR.
                </p>
                <p>Penilaian dan masukan yang Bapak/Ibu berikan sangat berharga bagi kami dan kami akan menjaga
                    kerahasiaan informasi yang diberikan tersebut. Oleh karena itu bantuan penilaian dan masukan dari
                    Bapak/Ibu sangat kami harapkan.</p>
                <p>Atas nama Dekan FMIPA UNSULBAR, kami mengucapkan terima kasih yang sebesar-besarnya atas
                    kesediaan saudara meluangkan waktu sejenak untuk berpartisapasi dalam pengisian survey ini.</p>
                <p>Tim TracerStudy FMIPA UNSULBAR</p>

                <div class="md:w-2/3 w-full">
                    <label for="namapengisi" class="block mb-1 text-sm font-medium text-gray-900 ">Nama Pengisi</label>
                    <input type="text" name="namapengisi" id="namapengisi"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                        placeholder="Nama pengisi" required>
                </div>
                <div class="md:w-2/3 w-full">
                    <label for="namaperusahaan" class="block mb-1 text-sm font-medium text-gray-900 ">Nama
                        Perusahaan</label>
                    <input type="text" name="namaperusahaan" id="namaperusahaan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                        placeholder="Nama perusahaan" required>
                </div>
                <div class="md:w-2/3 w-full">
                    <label for="posisijabatan" class="block mb-1 text-sm font-medium text-gray-900 ">Posisi
                        Jabatan</label>
                    <input type="text" name="posisijabatan" id="posisijabatan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                        placeholder="Posisi jabatan" required>
                </div>
                <div class="md:w-2/3 w-full">
                    <label for="namaalumni" class="block mb-1 text-sm font-medium text-gray-900 ">Nama Alumni FMIPA
                        Unsulbar yang Dinilai</label>
                    <input type="text" name="namaalumni" id="namaalumni"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                        placeholder="Nama alumni" required>
                </div>
                <div class="md:w-2/3 w-full">
                    <label for="prodialumni"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Program Studi
                        Alumni</label>
                    <select id="prodialumni" name="prodialumni"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="" selected>Pilih program studi</option>
                        <option value="Statistika">Statistika</option>
                        <option value="Matematika">Matematika</option>
                    </select>
                </div>


                <div class="">
                    <div class="bg-gray-200 text-md p-2 font-semibold">
                        SURVEY KEPUASAN PENGGUNA LULUSAN FMIPA UNSULBAR
                    </div>
                    <div class="flex p-2">
                        <div class="w-1/2">
                            Bagaimana <strong>sikap/etika</strong> lulusan kami yang bekerja di tempat Anda?
                        </div>
                        <div class="px-3">:</div>
                        <div class="w-1/2">
                            <div class="flex items-center mb-1">
                                <input id="p1a" type="radio" value="4" name="p1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                                <label for="p1a" class="ml-2 text-sm text-gray-700">Sangat Baik</label>
                            </div>
                            <div class="flex items-center  mb-1">
                                <input  id="p1b" type="radio" value="3" name="p1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                <label for="p1b" class="ml-2 text-sm text-gray-700">Baik</label>
                            </div>
                            <div class="flex items-center  mb-1">
                                <input  id="p1c" type="radio" value="2" name="p1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                                <label for="p1c" class="ml-2 text-sm text-gray-700">Cukup</label>
                            </div>
                            <div class="flex items-center  mb-1">
                                <input  id="p1d" type="radio" value="1" name="p1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="p1d" class="ml-2 text-sm text-gray-700">Kurang</label>
                            </div>
                            
                        </div>
                    </div>

                    <div class="flex p-2 bg-gray-100">
                        <div class="w-1/2">
                            Bagaimana <strong>keahlian</strong> lulusan kami yang bekerja di tempat Anda berdasarkan bidang ilmunya?
                        </div>
                        <div class="px-3">:</div>
                        <div class="w-1/2">
                            <div class="flex items-center mb-1">
                                <input id="p2a" type="radio" value="4" name="p2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                                <label for="p2a" class="ml-2 text-sm text-gray-700">Sangat Baik</label>
                            </div>
                            <div class="flex items-center  mb-1">
                                <input  id="p2b" type="radio" value="3" name="p2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                <label for="p2b" class="ml-2 text-sm text-gray-700">Baik</label>
                            </div>
                            <div class="flex items-center  mb-1">
                                <input  id="p2c" type="radio" value="2" name="p2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                                <label for="p2c" class="ml-2 text-sm text-gray-700">Cukup</label>
                            </div>
                            <div class="flex items-center  mb-1">
                                <input  id="p2d" type="radio" value="1" name="p2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="p2d" class="ml-2 text-sm text-gray-700">Kurang</label>
                            </div>
                            
                        </div>
                    </div>

                    <div class="flex p-2">
                        <div class="w-1/2">
                            Bagaimana kemampuan <strong>berbahasa asing</strong> lulusan kami yang bekerja di tempat Anda?
                        </div>
                        <div class="px-3">:</div>
                        <div class="w-1/2">
                            <div class="flex items-center mb-1">
                                <input id="p3a" type="radio" value="4" name="p3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                                <label for="p3a" class="ml-2 text-sm text-gray-700">Sangat Baik</label>
                            </div>
                            <div class="flex items-center  mb-1">
                                <input  id="p3b" type="radio" value="3" name="p3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                <label for="p3b" class="ml-2 text-sm text-gray-700">Baik</label>
                            </div>
                            <div class="flex items-center  mb-1">
                                <input  id="p3c" type="radio" value="2" name="p3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                                <label for="p3c" class="ml-2 text-sm text-gray-700">Cukup</label>
                            </div>
                            <div class="flex items-center  mb-1">
                                <input  id="p3d" type="radio" value="1" name="p3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="p3d" class="ml-2 text-sm text-gray-700">Kurang</label>
                            </div>
                            
                        </div>
                    </div>

                    <div class="flex p-2 bg-gray-100">
                        <div class="w-1/2">
                            Bagaimana kemampuan <strong>penggunaan teknologi informasi</strong> lulusan kami yang bekerja di tempat Anda?
                        </div>
                        <div class="px-3">:</div>
                        <div class="w-1/2">
                            <div class="flex items-center mb-1">
                                <input id="p4a" type="radio" value="4" name="p4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                                <label for="p4a" class="ml-2 text-sm text-gray-700">Sangat Baik</label>
                            </div>
                            <div class="flex items-center  mb-1">
                                <input  id="p4b" type="radio" value="3" name="p4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                <label for="p4b" class="ml-2 text-sm text-gray-700">Baik</label>
                            </div>
                            <div class="flex items-center  mb-1">
                                <input  id="p4c" type="radio" value="2" name="p4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                                <label for="p4c" class="ml-2 text-sm text-gray-700">Cukup</label>
                            </div>
                            <div class="flex items-center  mb-1">
                                <input  id="p4d" type="radio" value="1" name="p4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="p4d" class="ml-2 text-sm text-gray-700">Kurang</label>
                            </div>
                            
                        </div>
                    </div>

                    <div class="flex p-2">
                        <div class="w-1/2">
                            Bagaimana kemampuan <strong>berkomunikasi</strong> lulusan kami yang bekerja di tempat Anda?
                        </div>
                        <div class="px-3">:</div>
                        <div class="w-1/2">
                            <div class="flex items-center mb-1">
                                <input id="p5a" type="radio" value="4" name="p5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                                <label for="p5a" class="ml-2 text-sm text-gray-700">Sangat Baik</label>
                            </div>
                            <div class="flex items-center  mb-1">
                                <input  id="p5b" type="radio" value="3" name="p5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                <label for="p5b" class="ml-2 text-sm text-gray-700">Baik</label>
                            </div>
                            <div class="flex items-center  mb-1">
                                <input  id="p5c" type="radio" value="2" name="p5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                                <label for="p5c" class="ml-2 text-sm text-gray-700">Cukup</label>
                            </div>
                            <div class="flex items-center  mb-1">
                                <input  id="p5d" type="radio" value="1" name="p5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="p5d" class="ml-2 text-sm text-gray-700">Kurang</label>
                            </div>
                            
                        </div>
                    </div>

                    <div class="flex p-2 bg-gray-100">
                        <div class="w-1/2">
                            Bagaimana kemampuan <strong>kerjasama</strong> lulusan kami yang bekerja di tempat Anda?
                        </div>
                        <div class="px-3">:</div>
                        <div class="w-1/2">
                            <div class="flex items-center mb-1">
                                <input id="p6a" type="radio" value="4" name="p6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                                <label for="p6a" class="ml-2 text-sm text-gray-700">Sangat Baik</label>
                            </div>
                            <div class="flex items-center  mb-1">
                                <input  id="p6b" type="radio" value="3" name="p6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                <label for="p6b" class="ml-2 text-sm text-gray-700">Baik</label>
                            </div>
                            <div class="flex items-center  mb-1">
                                <input  id="p6c" type="radio" value="2" name="p6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                                <label for="p6c" class="ml-2 text-sm text-gray-700">Cukup</label>
                            </div>
                            <div class="flex items-center  mb-1">
                                <input  id="p6d" type="radio" value="1" name="p6" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="p6d" class="ml-2 text-sm text-gray-700">Kurang</label>
                            </div>
                            
                        </div>
                    </div>

                    <div class="flex p-2">
                        <div class="w-1/2">
                            Bagaimana kemampuan <strong>pengembangan diri</strong> lulusan kami yang bekerja di tempat Anda?
                        </div>
                        <div class="px-3">:</div>
                        <div class="w-1/2">
                            <div class="flex items-center mb-1">
                                <input id="p7a" type="radio" value="4" name="p7" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                                <label for="p7a" class="ml-2 text-sm text-gray-700">Sangat Baik</label>
                            </div>
                            <div class="flex items-center  mb-1">
                                <input  id="p7b" type="radio" value="3" name="p7" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                <label for="p7b" class="ml-2 text-sm text-gray-700">Baik</label>
                            </div>
                            <div class="flex items-center  mb-1">
                                <input  id="p7c" type="radio" value="2" name="p7" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2 ">
                                <label for="p7c" class="ml-2 text-sm text-gray-700">Cukup</label>
                            </div>
                            <div class="flex items-center  mb-1">
                                <input  id="p7d" type="radio" value="1" name="p7" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="p7d" class="ml-2 text-sm text-gray-700">Kurang</label>
                            </div>
                            
                        </div>
                    </div>

                    <div class="flex p-2 bg-gray-100">
                        <div class="w-1/2">
                            Bagaimana saran/harapan/masukan Anda terhadap lulusan FMIPA UNSULBAR ?
                        </div>
                        <div class="px-3">:</div>
                        <div class="w-1/2">
                            <input type="text" name="saran" id="saran"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                            placeholder="">
                        </div>
                    </div>


                    <button type="submit" class="btn-primary mt-5">Simpan</button>
                </div>
            </div>
        </div>
    </section>
    </form>

    <footer class="bg-primary ">
        <p class="p-5 text-white text-center">Copyright © 2022 Tracer Study FMIPA UNSULBAR</p>
    </footer>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
</body>

</html>