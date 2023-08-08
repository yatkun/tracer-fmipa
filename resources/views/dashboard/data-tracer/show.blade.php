@extends('_layouts.master')

@section('body')
<div class="bg-white py-5 px-5 rounded-lg flex flex-col">
    
        <h2 class="bg-primary bg-opacity-5 p-3 text-center font-semibold text-primary rounded uppercase">Kuesioner
            Tracer
            Study FMIPA
            UNSULBAR</h2>
        <div class="flex-none mt-3 mb-3 text-left">
            <span class=" bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-2 rounded">IDENTITAS
                ALUMNI</span>
        </div>

        <div class="flex flex-col border-b pb-5">
            <div class="grid grid-cols-6 gap-4 md:gap-6">

                <div class="col-span-6 sm:col-span-2">
                    <label for="kodept" class="block text-sm font-medium text-gray-700">Kode PT</label>
                    <input type="text" id="kodept" name="kodept"
                        class="mt-1 text-sm block w-full p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 "
                        value="001054">
                    @error('kodept')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>

                    @enderror
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <label for="kodeprodi" class="block text-sm font-medium text-gray-700">Kode Program Studi</label>
                    <select id="kodeprodi" name="kodeprodi" autocomplete="kodeprodi"
                        class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3  focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm">
                        <option value="">Pilih program studi</option>
                        <option value="1" {{ $user->kodeprodi==1 ? 'selected' : '' }}>49201 - Statistika</option>
                        <option value="2" {{ $user->kodeprodi==2 ? 'selected' : '' }}>44201 - Matematika</option>
                    </select>
                    @error('kodeprodi')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>

                    @enderror
                </div>


                <div class="col-span-6 sm:col-span-3">
                    <label for="namalengkap" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input type="text" id="namalengkap" name="namalengkap"
                        class="mt-1 text-sm block w-full p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 "
                        value="{{ $user->namalengkap }}">
                    @error('namalengkap')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>

                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-1">
                    <label for="tahunlulus" class="block text-sm font-medium text-gray-700">Tahun Lulus</label>
                    <input type="text" id="tahunlulus" name="tahunlulus"
                        class="mt-1 text-sm block w-full p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 "
                        value="{{ $user->tahunlulus }}">
                    @error('tahunlulus')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>

                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="nohp" class="block text-sm font-medium text-gray-700">No. HP/Whatsapp</label>
                    <input placeholder="contoh : 08123456789" type="text" id="nohp" name="nohp" value="{{ $user->nohp }}"
                        class="mt-1 text-sm block w-full p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                    @error('nohp')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>

                    @enderror
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="email" class="block text-sm font-medium text-gray-700">Alamat Email</label>
                    <input placeholder="contoh : putra@gmail.com" type="email" id="email" name="email"
                        value="{{ $user->email }}"
                        class="mt-1 text-sm block w-full p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                    @error('email')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>

                    @enderror
                </div>
            </div>
        </div>

        <div class="flex-none mt-3 mb-3 text-left">
            <span class=" bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-2 rounded">KUESIONER
                WAJIB</span>
        </div>

        <div class="flex flex-col">
            {{-- pertanyaan 1 --}}
            <div class="grid grid-cols-6  gap-1 md:gap-6 border-b-0 sm:border-b mb-4">

                <div class="col-span-6 sm:col-span-3">
                    <label for="" class="block text-sm font-medium text-gray-700">1. Jelaskan status Anda saat
                        ini?</label>
                </div>
                <div class="col-span-6 sm:col-span-3 border-b sm:border-b-0 pb-4 sm:pb-2">
                    <div class="flex items-center mb-1">
                        <input id="p1a" type="radio" name="p1"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
                            value="1" {{ $user->p1 == 1 ? 'checked' : '' }}>
                        <label for="p1a" class="ml-2 text-sm font-normal text-gray-700 ">Bekerja (full time/part
                            time)</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p1b" type="radio" name="p1"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="2" {{ $user->p1 ==2 ? 'checked' : '' }}>
                        <label for="p1b" class="ml-2 text-sm font-normal text-gray-700 ">Wiraswasta</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p1c" type="radio" name="p1"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="3" {{ $user->p1==3 ? 'checked' : '' }}>
                        <label for="p1c" class="ml-2 text-sm font-normal text-gray-700 ">Melanjutkan
                            Pendidikan</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p1d" type="radio" name="p1"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="4" {{ $user->p1==4 ? 'checked' : '' }}>
                        <label for="p1d" class="ml-2 text-sm font-normal text-gray-700 ">Tidak Kerja tetapi sedang
                            mencari kerja</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p1e" type="radio" name="p1"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="5" {{ $user->p1==5 ? 'checked' : '' }}>
                        <label for="p1e" class="ml-2 text-sm font-normal text-gray-700 ">Belum memungkinkan
                            bekerja</label>
                    </div>
                    @error('p1')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>

                    @enderror
                </div>
            </div>

            {{-- pertanyaan 2 --}}
            <div class="grid grid-cols-6  gap-1 md:gap-6 border-b-0 sm:border-b mb-4">

                <div class="col-span-6 sm:col-span-3">
                    <label for="" class="block text-sm font-medium text-gray-700">2. Apakah anda telah
                        mendapatkan
                        pekerjaan <= 6 bulan / termasuk bekerja sebelum lulus ?</label>
                </div>
                <div class="col-span-6 sm:col-span-3 border-b sm:border-b-0 pb-4 sm:pb-2">
                    <div class="flex items-center mb-1">
                        <input id="p2a" type="radio" name="p2"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
                            value="1" {{ $user->p2==1 ? 'checked' : '' }}>
                        <label for="p2a" class="ml-2 text-sm font-normal text-gray-700 ">Ya</label>
                    </div>
                    <div class="col-span-6 sm:col-span-3 mb-1">
                        <label for="p2c" class="block text-sm font-normal text-gray-700">Dalam berapa bulan anda
                            mendapatkan pekerjaan ?</label>
                        <input disabled placeholder="contoh : 2" type="text" id="p2c" name="p2c"
                            value="{{ $user->p2c }}"
                            class="cursor-not-allowed bg-gray-100 mt-1 text-sm block w-full p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p2b" type="radio" name="p2"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="2" {{ $user->p2 ==2 ? 'checked' : '' }}>
                        <label for="p2b" class="ml-2 text-sm font-normal text-gray-700 ">Tidak</label>
                    </div>
                    <div class="col-span-6 sm:col-span-3 mb-1">
                        <label for="p2d" class="block text-sm font-normal text-gray-700">Berapa bulan waktu untuk
                            mendapatkan pekerjaan pertama</label>
                        <input disabled placeholder="contoh : 2" type="text" id="p2d" name="p2d"
                            value="{{ $user->p2d }}"
                            class="cursor-not-allowed bg-gray-100 mt-1 text-sm block w-full p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                    </div>


                    <div class="col-span-6 sm:col-span-3 mb-1">
                        <label for="p2e" class="block text-sm font-normal text-gray-700"> Berapa rata-rata
                            pendapatan anda per bulan ? (take home pay)?</label>
                        <select id="p2e" name="p2e" autocomplete="p2e"
                            class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3  focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm">
                            <option value="">Pilih rata-rata pendapatan</option>
                            <option value="1" {{ $user->p2e==1 ? 'selected' : '' }}>Rp.1.000.000 - Rp.3.000.000</option>
                            <option value="2" {{ $user->p2e==2 ? 'selected' : '' }}>Rp.3.000.001 - Rp.5.000.000</option>
                            <option value="3" {{ $user->p2e==3 ? 'selected' : '' }}>Rp.5.000.001 - Rp.7.000.000</option>
                            <option value="4" {{ $user->p2e==4 ? 'selected' : '' }}>Rp.7.000.001 - Rp.9.000.000</option>
                            <option value="5" {{ $user->p2e==5 ? 'selected' : '' }}>> Rp.10.000.000</option>
                            <option value="6" {{ $user->p2e==6 ? 'selected' : '' }}>Tidak punya pendapatan</option>

                        </select>
                        @error('p2e')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>

                        @enderror
                    </div>





                </div>
            </div>


            {{-- pertanyaan 3 --}}
            <div class="grid grid-cols-6  gap-1 md:gap-6 border-b-0 sm:border-b mb-4">

                <div class="col-span-6 sm:col-span-3">
                    <label for="" class="block text-sm font-medium text-gray-700">3. Dimana lokasi tempat Anda
                        bekerja?</label>
                </div>
                <div class="col-span-6 sm:col-span-3 border-b sm:border-b-0 pb-4 sm:pb-2">
                    <input type="text" id="p3a" name="p3a" value="{{ $user->p3a }}" placeholder="Masukkan provinsi (Contoh : Sulawesi Barat)"
                            class="text-sm block w-full  p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">

                            <input type="text" id="p3b" name="p3b" value="{{ $user->p3b }}" placeholder="Masukkan kabupaten/kota (Contoh : Majene)"
                            class="mt-3 text-sm block w-full  p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                            @error('p3a')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                            @error('p3b')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror

                </div>
            </div>


            {{-- pertanyaan 4 --}}
            <div class="grid grid-cols-6  gap-1 md:gap-6 border-b-0 sm:border-b mb-4">

                <div class="col-span-6 sm:col-span-3">
                    <label for="" class="block text-sm font-medium text-gray-700">4. Apa jenis
                        perusahaan/instansi/institusi tempat anda bekerja sekarang?</label>
                </div>
                <div class="col-span-6 sm:col-span-3 border-b sm:border-b-0 pb-4 sm:pb-2">
                    <div class="flex items-center mb-1">
                        <input id="p4a" type="radio" name="p4"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
                            value="1" {{ $user->p4==1 ? 'checked' : '' }}>
                        <label for="p4a" class="ml-2 text-sm font-normal text-gray-700 ">Instansi
                            pemerintah</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p4b" type="radio" name="p4"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="2" {{ $user->p4==2 ? 'checked' : '' }}>
                        <label for="p4b" class="ml-2 text-sm font-normal text-gray-700 ">BUMN/BUMD</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p4c" type="radio" name="p4"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="3" {{ $user->p4==3 ? 'checked' : '' }}>
                        <label for="p4c" class="ml-2 text-sm font-normal text-gray-700 ">Institusi/Organisasi
                            Multilateral</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p4d" type="radio" name="p4"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="4" {{ $user->p4==4 ? 'checked' : '' }}>
                        <label for="p4d" class="ml-2 text-sm font-normal text-gray-700 ">Organisasi
                            non-profit/Lembaga Swadaya Masyarakat</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p4e" type="radio" name="p4"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="5" {{ $user->p4==5 ? 'checked' : '' }}>
                        <label for="p4e" class="ml-2 text-sm font-normal text-gray-700 ">Perusahaan
                            swasta</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p4f" type="radio" name="p4"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="6" {{ $user->p4==6 ? 'checked' : '' }}>
                        <label for="p4f" class="ml-2 text-sm font-normal text-gray-700 ">Wiraswasta/perusahaan
                            sendiri</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p4g" type="radio" name="p4"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="7" {{ $user->p4==7 ? 'checked' : '' }}>
                        <label for="p4g" class="ml-2 text-sm font-normal text-gray-700 ">Belum bekerja</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p4h" type="radio" name="p4"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="8" {{ $user->p4==8 ? 'checked' : '' }}>
                        <label for="p4h" class="ml-2 text-sm font-normal text-gray-700 ">Lainnya,
                            tuliskan</label>
                        <input disabled type="text" id="p4i" name="p4i" value="{{ $user->p4i }}"
                            class="cursor-not-allowed bg-gray-100 ml-3 mt-1 text-sm block  p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                    </div>
                    @error('p4')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>

                    @enderror

                </div>
            </div>

            {{-- pertanyaan 5 --}}
            <div class="grid grid-cols-6 items-center gap-1 md:gap-6 border-b-0 sm:border-b mb-4">

                <div class="col-span-6 sm:col-span-3">
                    <label for="" class="block text-sm font-medium text-gray-700">5. Apa nama
                        perusahaan/kantor tempat Anda bekerja?</label>
                </div>
                <div class="col-span-6 sm:col-span-3 border-b sm:border-b-0 pb-4 sm:pb-2">
                    <input type="text" id="p5" name="p5" value="{{ $user->p5 }}"
                        class="text-sm block w-full  p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                    @error('p5')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>

                    @enderror
                </div>

            </div>

            {{-- pertanyaan 6 --}}
            <div class="grid grid-cols-6  gap-1 md:gap-6 border-b-0 sm:border-b mb-4">

                <div class="col-span-6 sm:col-span-3">
                    <label for="" class="block text-sm font-medium text-gray-700">6. Bila berwiraswasta, apa
                        posisi/jabatan Anda saat ini ?</label>
                </div>
                <div class="col-span-6 sm:col-span-3 border-b sm:border-b-0 pb-4 sm:pb-2">
                    <div class="flex items-center mb-1">
                        <input id="p6a" type="radio" name="p6"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
                            value="1" {{ $user->p6==1 ? 'checked' : '' }}>
                        <label for="p6a" class="ml-2 text-sm font-normal text-gray-700 ">Founder</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p6b" type="radio" name="p6"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="2" {{ $user->p6==2 ? 'checked' : '' }}>
                        <label for="p6b" class="ml-2 text-sm font-normal text-gray-700 ">Co-Founder</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p6c" type="radio" name="p6"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="3" {{ $user->p6==3 ? 'checked' : '' }}>
                        <label for="p6c" class="ml-2 text-sm font-normal text-gray-700 ">Staff</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p6d" type="radio" name="p6"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="4" {{ $user->p6==4 ? 'checked' : '' }}>
                        <label for="p6d" class="ml-2 text-sm font-normal text-gray-700 ">Freelance/Kerja
                            Lepas</label>
                    </div>

                    <div class="flex items-center mb-1">
                        <input id="p6e" type="radio" name="p6"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="5" {{ $user->p6==5 ? 'checked' : '' }}>
                        <label for="p6e" class="ml-2 text-sm font-normal text-gray-700 ">Belum Bekerja</label>
                    </div>

                    @error('p6')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>

                    @enderror


                </div>
            </div>

            {{-- pertanyaan 7 --}}
            <div class="grid grid-cols-6  gap-1 md:gap-6 border-b-0 sm:border-b mb-4">

                <div class="col-span-6 sm:col-span-3">
                    <label for="" class="block text-sm font-medium text-gray-700">7. Apa tingkat tempat kerja
                        Anda ?</label>
                </div>
                <div class="col-span-6 sm:col-span-3 border-b sm:border-b-0 pb-4 sm:pb-2">
                    <div class="flex items-center mb-1">
                        <input id="p7a" type="radio" name="p7"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
                            value="1" {{ $user->p7==1 ? 'checked' : '' }}>
                        <label for="p7a" class="ml-2 text-sm font-normal text-gray-700 ">Lokal/wilayah/wiraswasta
                            tidak berbadan hukum</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p7b" type="radio" name="p7"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="2" {{ $user->p7==2 ? 'checked' : '' }}>
                        <label for="p7b" class="ml-2 text-sm font-normal text-gray-700 ">Nasional/wiraswasta
                            berbadan hukum</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p7c" type="radio" name="p7"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="3" {{ $user->p7==3 ? 'checked' : '' }}>
                        <label for="p7c"
                            class="ml-2 text-sm font-normal text-gray-700 ">Multinasional/internasional</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p7d" type="radio" name="p7"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="4" {{ $user->p7==4 ? 'checked' : '' }}>
                        <label for="p7d" class="ml-2 text-sm font-normal text-gray-700 ">Belum bekerja</label>
                    </div>
                    @error('p7')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>

                    @enderror
                </div>
            </div>

            {{-- pertanyaan 8 --}}
            <div class="grid grid-cols-6  gap-1 md:gap-6 border-b-0 sm:border-b mb-4">

                <div class="col-span-6 sm:col-span-3">
                    <label for="" class="block text-sm font-medium text-gray-700">8. Pertanyaan studi lanjut
                        :</label>
                </div>
                <div class="col-span-6 sm:col-span-3 border-b sm:border-b-0 pb-4 sm:pb-2">
                    <div class="flex flex-col mb-1 mt-2 sm:mt-0">
                        <label for="p8a" class="block text-sm font-medium text-gray-700">Sumber Biaya</label>
                        <select id="p8a" name="p8a" autocomplete="p8a"
                            class="mt-1 rounded-md border border-gray-300 bg-white py-2 px-3  focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm">
                            <option value="" >Pilih sumber biaya</option>
                            <option value="1" {{ $user->p8a ==1 ? 'selected' : '' }}>Biaya Sendiri</option>
                            <option value="2" {{ $user->p8a ==2 ? 'selected' : '' }}>Beasiswa</option>
                        </select>
                    </div>
                    <div class="flex flex-col mb-1 mt-2 sm:mt-2">
                        <label for="p8b" class="block text-sm font-medium text-gray-700">Perguruan Tinggi</label>
                        <input type="text" id="p8b" name="p8b" value="{{ $user->p8b }}" placeholder="Masukkan nama perguruan tinggi"
                            class="text-sm block w-full  p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                    </div>

                    <div class="flex flex-col mb-1 mt-2 sm:mt-2">
                        <label for="p8c" class="block text-sm font-medium text-gray-700">Program Studi</label>
                        <input type="text" id="p8c" name="p8c" value="{{ $user->p8c }}" placeholder="Masukkan nama program studi"
                            class="text-sm block w-full  p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                    </div>

                    <div class="flex flex-col mb-1 mt-2 sm:mt-2">
                        <label for="p8d" class="block text-sm font-medium text-gray-700">Tanggal Masuk</label>
                        <input type="date" id="p8d" name="p8d" value="{{ $user->p8d }}" placeholder="Contoh : 01-02-2021"
                            class="text-sm block w-full  p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                    </div>
                </div>
            </div>

            {{-- pertanyaan 9 --}}
            <div class="grid grid-cols-6  gap-1 md:gap-6 border-b-0 sm:border-b mb-4">

                <div class="col-span-6 sm:col-span-3">
                    <label for="" class="block text-sm font-medium text-gray-700">9. Sebutkan sumberdana dalam
                        pembiayaan kuliah? (bukan ketika Studi Lanjut)</label>
                </div>
                <div class="col-span-6 sm:col-span-3 border-b sm:border-b-0 pb-4 sm:pb-2">
                    <div class="flex items-center mb-1">
                        <input id="p9a" type="radio" name="p9"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
                            value="1" {{ $user->p9==1 ? 'checked' : '' }}>
                        <label for="p9a" class="ml-2 text-sm font-normal text-gray-700 ">Biaya Sendiri /
                            Keluarga</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p9b" type="radio" name="p9"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="2" {{ $user->p9==2 ? 'checked' : '' }}>
                        <label for="p9b" class="ml-2 text-sm font-normal text-gray-700 ">Beasiswa ADIK</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p9c" type="radio" name="p9"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="3" {{ $user->p9==3 ? 'checked' : '' }}>
                        <label for="p9c" class="ml-2 text-sm font-normal text-gray-700 ">Beasiswa
                            BIDIKMISI</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p9d" type="radio" name="p9"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="4" {{ $user->p9==4 ? 'checked' : '' }}>
                        <label for="p9d" class="ml-2 text-sm font-normal text-gray-700 ">Beasiswa PPA</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p9e" type="radio" name="p9"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="5" {{ $user->p9==5 ? 'checked' : '' }}>
                        <label for="p9e" class="ml-2 text-sm font-normal text-gray-700 ">Beasiswa
                            AFIRMASI</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p9f" type="radio" name="p9"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="6" {{ $user->p9==6 ? 'checked' : '' }}>
                        <label for="p9f" class="ml-2 text-sm font-normal text-gray-700 ">Beasiswa
                            Perusahaan/Swasta</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p9g" type="radio" name="p9"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="7" {{ $user->p9==7 ? 'checked' : '' }}>
                        <label for="p9g" class="ml-2 text-sm font-normal text-gray-700 ">Lainnya,
                            tuliskan:</label>
                        <input type="text" id="p9h" name="p9h" value="{{ $user->p9h }}"
                            class=" ml-3 mt-1 text-sm block  p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                    </div>
                </div>
            </div>

            {{-- pertanyaan 10 --}}
            <div class="grid grid-cols-6  gap-1 md:gap-6 border-b-0 sm:border-b mb-4">

                <div class="col-span-6 sm:col-span-3">
                    <label for="" class="block text-sm font-medium text-gray-700">10. Seberapa erat hubungan
                        antara bidang studi dengan pekerjaan anda?</label>
                </div>
                <div class="col-span-6 sm:col-span-3 border-b sm:border-b-0 pb-4 sm:pb-2">
                    <div class="flex items-center mb-1">
                        <input id="p10a" type="radio" name="p10"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
                            value="1" {{ $user->p10==1 ? 'checked' : '' }}>
                        <label for="p10a" class="ml-2 text-sm font-normal text-gray-700 ">Sangat Erat</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p10b" type="radio" name="p10"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="2" {{ $user->p10==2 ? 'checked' : '' }}>
                        <label for="p10b" class="ml-2 text-sm font-normal text-gray-700 ">Erat</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p10c" type="radio" name="p10"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="3" {{ $user->p10==3 ? 'checked' : '' }}>
                        <label for="p10c" class="ml-2 text-sm font-normal text-gray-700 ">Cukup Erat</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p10d" type="radio" name="p10"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="4" {{ $user->p10==4 ? 'checked' : '' }}>
                        <label for="p10d" class="ml-2 text-sm font-normal text-gray-700 ">Kurang Erat</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p10e" type="radio" name="p10"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="5" {{ $user->p10==5 ? 'checked' : '' }}>
                        <label for="p10e" class="ml-2 text-sm font-normal text-gray-700 ">Tidak Sama
                            Sekali</label>
                    </div>

                </div>
            </div>




        </div>


        <div>
            <a href="" class="btn-primary">Kembali</a>
        </div>

</div>
@endsection