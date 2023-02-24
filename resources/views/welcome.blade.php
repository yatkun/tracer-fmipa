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

            
            <a href="/masuk" class="btn-primary">Masuk</a>
        </div>
    </section>

    {{-- Petunjuk --}}
    <section class="py-10">
        <div class="container mx-auto flex md:flex-row flex-col-reverse items-center ">

            <div class=" w-full md:w-1/2 space-y-4 md:space-y-6">
                <div class="absolute bg md:w-52 md:h-48 w-32 h-28"></div>
                <h2 class="relative font-bold text-4xl text-center md:text-left md:text-5xl text-primary md:leading-12">
                    Tracer Study FMIPA UNSULBAR</h2>
                <p class="text-lg text-center md:text-left md:text-xl text-subtitle md:leading-8">Merupakan Aplikasi
                    Untuk Melakukan Tracing Terhadap Aktifitas Alumni/Lulusan Dari Fakultas Matematika dan Ilmu
                    Pengetahuan Alam Universitas Sulawesi Barat</p>
                <div class="flex flex-col space-y-2">
                    <div class="flex items-center gap-3 mx-auto md:mx-0">
 
                        <a href="/daftar" class="btn-primary md:flex block text-center">Buat Akun Alumni</a>
                        <a href="/masuk" class="btn-primary bg-primary md:flex block text-center">Masuk</a>
                        
                    </div>
                    <div class="flex items-center gap-3 mx-auto md:mx-0">
                        <a href="#" class="btn-red md:flex block text-center">Kuisioner Pengguna Lulusan</a>
                        <a href="#" class="btn-red md:flex block text-center">Kuisioner Mitra Kerjasama</a>
                    
                        
                    </div>
                </div>
             
                  
              
            </div>
            <div class=" md:w-1/2 w-full">
                <img src="/images/hero.png" alt="" class="w-4/5 sm:w-full block mx-auto">
            </div>

        </div>
    </section>

    <section class="bg-primary bg-opacity-5 py-16" id="petunjuk">
        <div class="container mx-auto">
            <div class="space-y-2">
                <h2 class="text-2xl md:text-3xl text-bold text-primary font-bold text-center">Petunjuk Pengisian</h2>
                <p class="text-center text-slate-500">Berikut Merupakan Tahapan Pengisian Tracer Study FMIPA UNSULBAR
                </p>
            </div>
            <div class="flex md:flex-row flex-col flex-wrap md:justify-around items-center mt-5 md:mt-5 lg:mt-10">

                <div class="flex flex-col w-full md:w-1/2 lg:w-1/3 ">
                    <img src="https://tracerstudy.unm.ac.id/assets/media/illustrations/sketchy-1/2.png"
                        class="w-52 flex mx-auto">
                    <h3 class="text-md font-medium text-center mt-4">Akses Web Tracer Study</h3>
                    <p class="text-center text-sm text-slate-500">Akses Halaman Website</p>
                    <p class="text-center text-sm text-slate-500">https://tracerstudy.fmipa.unsulbar.ac.id</p>
                </div>

                <div class="flex flex-col w-full md:w-1/2 lg:w-1/3">
                    <img src="https://tracerstudy.unm.ac.id/assets/media/illustrations/sketchy-1/2.png"
                        class="w-52 flex mx-auto">
                    <h3 class="text-md font-medium text-center mt-4">Registrasi Akun</h3>
                    <p class="text-center text-sm text-slate-500">Membuat Akun Alumni</p>
                    <p class="text-center text-sm text-slate-500">https://tracerstudy.fmipa.unsulbar.ac.id/daftar</p>
                </div>
                <div class="flex flex-col w-full md:w-1/2 lg:w-1/3">
                    <img src="https://tracerstudy.unm.ac.id/assets/media/illustrations/sketchy-1/2.png"
                        class="w-52 flex mx-auto">
                    <h3 class="text-md font-medium text-center mt-4">Isi Kuesioner</h3>
                    <p class="text-center text-sm text-slate-500">Mengisi Kuesioner</p>
                    <p class="text-center text-sm text-slate-500">https://tracerstudy.fmipa.unsulbar.ac.id</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Kontak --}}
    <section class="py-16">
        <div class="container mx-auto">
            <div class="space-y-2">
                <h2 class="text-2xl md:text-3xl text-bold text-primary font-bold text-center">Kontak</h2>
                <p class="text-center text-slate-500">Jika Ada Yang Ingin Ditanyakan Silahkan Hubungi Kami</p>
            </div>
            <div
                class="bg-primary bg-opacity-5 mt-5 md:mt-5 lg:mt-10 w-full md:w-2/3 mx-auto shadow-md  p-6 md:p-8 rounded-md">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="first-name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                            class="input">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="last-name" class="block text-sm font-medium text-gray-700">No.HP (Whatsapp)</label>
                        <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="input">
                    </div>



                    <div class="col-span-6">
                        <label for="pertanyaan" class="block text-sm font-medium text-gray-700">Pertanyaan</label>
                        <textarea name="pertanyaan" id="pertanyaan" rows="4" class="p-2 mt-1 w-full rounded-md shadow-sm text-sm input"></textarea>
                        {{-- <input type="text" name="email-address" id="email-address" autocomplete="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"> --}}
                    </div>
                    <div class="flex">
                        <button class="btn-primary">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
    <footer class="bg-primary">
        <p class="p-5 text-white text-center">Copyright © 2022 Tracer Study FMIPA UNSULBAR</p>
    </footer>
</body>

</html>
