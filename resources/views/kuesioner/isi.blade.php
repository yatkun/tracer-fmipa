@extends('_layouts.master')

@section('body')
    <div class="bg-white py-5 px-5 rounded-lg flex flex-col">
        <form action="{{ route('kuesioner.store') }}" method="POST">
            @csrf
            <h2 class="bg-primary bg-opacity-5 p-3 text-center font-semibold text-primary rounded uppercase">Kuesioner Tracer
                Study FMIPA
                UNSULBAR</h2>
            <div class="flex-none mt-3 mb-3 text-left">
                <span class=" bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-2 rounded">IDENTITAS
                    ALUMNI</span>
            </div>

            <div class="flex flex-col border-b pb-5">
                <div class="grid grid-cols-6 gap-4 md:gap-6">
                    <div class="col-span-6 sm:col-span-2">
                        <label for="nomoralumni" class="block text-sm font-medium text-gray-700">Nomor Alumni</label>
                        <input type="text" id="nomoralumni" name="nomoralumni"
                            class="mt-1 text-sm block w-full p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <label for="kodept" class="block text-sm font-medium text-gray-700">Kode PT</label>
                        <input type="text" id="kodept" name="kodept"
                            class="mt-1 text-sm block w-full p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 "
                            value="001054">
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <label for="kodeprodi" class="block text-sm font-medium text-gray-700">Kode Program Studi</label>
                        <select id="kodeprodi" name="kodeprodi" autocomplete="kodeprodi"
                            class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3  focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm">
                            <option>Pilih program studi</option>
                            <option value="1">49201 - Statistika</option>
                            <option value="2">44201 - Matematika</option>
                        </select>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="namalengkap" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" id="namalengkap" name="namalengkap"
                            class="mt-1 text-sm block w-full p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 "
                            value="{{ auth()->user()->namalengkap }}">
                    </div>

                    <div class="col-span-6 sm:col-span-1">
                        <label for="tahunlulus" class="block text-sm font-medium text-gray-700">Tahun Lulus</label>
                        <input type="text" id="tahunlulus" name="tahunlulus"
                            class="mt-1 text-sm block w-full p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 "
                            value="{{ auth()->user()->tahunlulus }}">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="nohp" class="block text-sm font-medium text-gray-700">No. HP/Whatsapp</label>
                        <input placeholder="contoh : 08123456789" type="text" id="nohp" name="nohp"
                            class="mt-1 text-sm block w-full p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="email" class="block text-sm font-medium text-gray-700">Alamat Email</label>
                        <input placeholder="contoh : putra@gmail.com" type="email" id="email" name="email"
                            class="mt-1 text-sm block w-full p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                    </div>
                </div>
            </div>

            <div class="flex-none mt-3 mb-3 text-left">
                <span class=" bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-2 rounded">KUESIONER
                    WAJIB</span>
            </div>

            <div class="flex flex-col">
                {{-- pertanyaan 1 --}}
                <div class="grid grid-cols-6  gap-1 md:gap-6 border-b-0 sm:border-b mb-4" id="pertanyaan1">

                    <div class="col-span-6 sm:col-span-3">
                        <label for="" class="block text-sm font-medium text-gray-700">1. Jelaskan status Anda saat
                            ini?</label>
                    </div>
                    <div class="col-span-6 sm:col-span-3 border-b sm:border-b-0 pb-4 sm:pb-2">
                        <div class="flex items-center mb-1">
                            <input id="p1a" type="radio" value="" name="p1"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
                                value="1">
                            <label for="p1a" class="ml-2 text-sm font-normal text-gray-700 ">Bekerja (full time/part
                                time)</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p1b" type="radio" value="" name="p1"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="2">
                            <label for="p1b" class="ml-2 text-sm font-normal text-gray-700 ">Wiraswasta</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p1c" type="radio" value="" name="p1"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="3">
                            <label for="p1c" class="ml-2 text-sm font-normal text-gray-700 ">Melanjutkan
                                Pendidikan</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p1d" type="radio" value="" name="p1"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="4">
                            <label for="p1d" class="ml-2 text-sm font-normal text-gray-700 ">Tidak Kerja tetapi sedang
                                mencari kerja</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p1e" type="radio" value="" name="p1"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="5">
                            <label for="p1e" class="ml-2 text-sm font-normal text-gray-700 ">Belum memungkinkan
                                bekerja</label>
                        </div>

                    </div>
                </div>

                {{-- pertanyaan 2 --}}
                <div class="pert2 grid grid-cols-6  gap-1 md:gap-6 border-b-0 sm:border-b mb-4" id="pertanyaan2">

                    <div class="col-span-6 sm:col-span-3" >
                        <label for="" class="block text-sm font-medium text-gray-700">2. Apakah anda telah
                            mendapatkan
                            pekerjaan <= 6 bulan / termasuk bekerja sebelum lulus ?</label>
                    </div>
                    <div class="col-span-6 sm:col-span-3 border-b sm:border-b-0 pb-4 sm:pb-2">
                        <div class="flex items-center mb-1">
                            <input id="p2a" type="radio" value="" name="p2"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
                                value="1">
                            <label for="p2a" class="ml-2 text-sm font-normal text-gray-700 ">Ya</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 mb-1">
                            <label for="p2c" class="block text-sm font-normal text-gray-700">Dalam berapa bulan anda
                                mendapatkan pekerjaan ?</label>
                            <input disabled placeholder="contoh : 2" type="text" id="p2c"
                                class="cursor-not-allowed bg-gray-100 mt-1 text-sm block w-full p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p2b" type="radio" value="" name="p2"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="2">
                            <label for="p2b" class="ml-2 text-sm font-normal text-gray-700 ">Tidak</label>
                        </div>
                        <div class="col-span-6 sm:col-span-3 mb-1">
                            <label for="p2d" class="block text-sm font-normal text-gray-700">Berapa bulan waktu untuk
                                mendapatkan pekerjaan pertama</label>
                            <input disabled placeholder="contoh : 2" type="text" id="p2d" name="p2d"
                                class="cursor-not-allowed bg-gray-100 mt-1 text-sm block w-full p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                        </div>


                        <div class="col-span-6 sm:col-span-3 mb-1">
                            <label for="p2e" class="block text-sm font-normal text-gray-700"> Berapa rata-rata
                                pendapatan anda per bulan ? (take home pay)?</label>
                            <input placeholder="contoh : 3.000.000" type="text" id="p2e" name="p2e"
                                class=" mt-1 text-sm block w-full p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                        </div>





                    </div>
                </div>


                {{-- pertanyaan 3 --}}
                <div id="pertanyaan3">
                <div class="grid grid-cols-6  gap-1 md:gap-6 border-b-0 sm:border-b mb-4">

                    <div class="col-span-6 sm:col-span-3">
                        <label for="" class="block text-sm font-medium text-gray-700">3. Dimana lokasi tempat Anda
                            bekerja?</label>
                    </div>
                    <div class="col-span-6 sm:col-span-3 border-b sm:border-b-0 pb-4 sm:pb-2">
                        <div class="flex items-center mb-1">
                            <input id="p3a" type="radio" name="p3"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
                                value="1">
                            <label for="p3a" class="ml-2 text-sm font-normal text-gray-700 ">Provinsi</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p3b" type="radio" name="p3"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="2">
                            <label for="p3b" class="ml-2 text-sm font-normal text-gray-700 ">Kab/Kota</label>
                        </div>


                    </div>
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
                                value="1">
                            <label for="p4a" class="ml-2 text-sm font-normal text-gray-700 ">Instansi
                                pemerintah</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p4b" type="radio" name="p4"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="2">
                            <label for="p4b" class="ml-2 text-sm font-normal text-gray-700 ">BUMN/BUMD</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p4c" type="radio" name="p4"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="3">
                            <label for="p4c" class="ml-2 text-sm font-normal text-gray-700 ">Institusi/Organisasi
                                Multilateral</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p4d" type="radio" name="p4"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="4">
                            <label for="p4d" class="ml-2 text-sm font-normal text-gray-700 ">Organisasi
                                non-profit/Lembaga Swadaya Masyarakat</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p4e" type="radio" name="p4"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="5">
                            <label for="p4e" class="ml-2 text-sm font-normal text-gray-700 ">Perusahaan
                                swasta</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p4f" type="radio" name="p4"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="6">
                            <label for="p4f" class="ml-2 text-sm font-normal text-gray-700 ">Wiraswasta/perusahaan
                                sendiri</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p4g" type="radio" name="p4"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="7">
                            <label for="p4g" class="ml-2 text-sm font-normal text-gray-700 ">Lainnya,
                                tuliskan</label>
                            <input disabled type="text" id="p4h" name="p4h"
                                class="cursor-not-allowed bg-gray-100 ml-3 mt-1 text-sm block  p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                        </div>


                    </div>
                </div>

                {{-- pertanyaan 5 --}}
                <div class="grid grid-cols-6 items-center gap-1 md:gap-6 border-b-0 sm:border-b mb-4">

                    <div class="col-span-6 sm:col-span-3">
                        <label for="" class="block text-sm font-medium text-gray-700">5. Apa nama
                            perusahaan/kantor tempat Anda bekerja?</label>
                    </div>
                    <div class="col-span-6 sm:col-span-3 border-b sm:border-b-0 pb-4 sm:pb-2">
                        <input type="text" id="p5" name="p5"
                            class="text-sm block w-full  p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
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
                                value="1">
                            <label for="p6a" class="ml-2 text-sm font-normal text-gray-700 ">Founder</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p6b" type="radio" name="p6"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="2">
                            <label for="p6b" class="ml-2 text-sm font-normal text-gray-700 ">Co-Founder</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p6c" type="radio" name="p6"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="3">
                            <label for="p6c" class="ml-2 text-sm font-normal text-gray-700 ">Staff</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p6d" type="radio" name="p6"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="4">
                            <label for="p6d" class="ml-2 text-sm font-normal text-gray-700 ">Freelance/Kerja
                                Lepas</label>
                        </div>



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
                                value="1">
                            <label for="p7a" class="ml-2 text-sm font-normal text-gray-700 ">Lokal/wilayah/wiraswasta
                                tidak berbadan hukum</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p7b" type="radio" name="p7"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="2">
                            <label for="p7b" class="ml-2 text-sm font-normal text-gray-700 ">Nasional/wiraswasta
                                berbadan hukum</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p7c" type="radio" name="p7"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="3">
                            <label for="p7c"
                                class="ml-2 text-sm font-normal text-gray-700 ">Multinasional/internasional</label>
                        </div>
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
                                <option value="0">Pilih sumber biaya</option>
                                <option value="1">Biaya Sendiri</option>
                                <option value="2">Beasiswa</option>
                            </select>
                        </div>
                        <div class="flex flex-col mb-1 mt-2 sm:mt-2">
                            <label for="p8b" class="block text-sm font-medium text-gray-700">Perguruan Tinggi</label>
                            <input type="text" id="p8b" name="p8b"
                                placeholder="Masukkan nama perguruan tinggi"
                                class="text-sm block w-full  p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                        </div>

                        <div class="flex flex-col mb-1 mt-2 sm:mt-2">
                            <label for="p8c" class="block text-sm font-medium text-gray-700">Program Studi</label>
                            <input type="text" id="p8c" name="p8c"
                                placeholder="Masukkan nama program studi"
                                class="text-sm block w-full  p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                        </div>

                        <div class="flex flex-col mb-1 mt-2 sm:mt-2">
                            <label for="p8d" class="block text-sm font-medium text-gray-700">Tanggal Masuk</label>
                            <input type="date" id="p8d" name="p8d" placeholder="Contoh : 01-02-2021"
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
                                value="1">
                            <label for="p9a" class="ml-2 text-sm font-normal text-gray-700 ">Biaya Sendiri /
                                Keluarga</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p9b" type="radio" name="p9"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="2">
                            <label for="p9b" class="ml-2 text-sm font-normal text-gray-700 ">Beasiswa ADIK</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p9c" type="radio" name="p9"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="3">
                            <label for="p9c" class="ml-2 text-sm font-normal text-gray-700 ">Beasiswa
                                BIDIKMISI</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p9d" type="radio" name="p9"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="4">
                            <label for="p9d" class="ml-2 text-sm font-normal text-gray-700 ">Beasiswa PPA</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p9e" type="radio" name="p9"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="5">
                            <label for="p9e" class="ml-2 text-sm font-normal text-gray-700 ">Beasiswa
                                AFIRMASI</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p9f" type="radio" name="p9"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="6">
                            <label for="p9f" class="ml-2 text-sm font-normal text-gray-700 ">Beasiswa
                                Perusahaan/Swasta</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p9g" type="radio" name="p9"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="7">
                            <label for="p9g" class="ml-2 text-sm font-normal text-gray-700 ">Lainnya,
                                tuliskan:</label>
                            <input type="text" id="p9h" name="p9h"
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
                                value="1">
                            <label for="p10a" class="ml-2 text-sm font-normal text-gray-700 ">Sangat Erat</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p10b" type="radio" name="p10"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="2">
                            <label for="p10b" class="ml-2 text-sm font-normal text-gray-700 ">Erat</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p10c" type="radio" name="p10"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="3">
                            <label for="p10c" class="ml-2 text-sm font-normal text-gray-700 ">Cukup Erat</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p10d" type="radio" name="p10"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="4">
                            <label for="p10d" class="ml-2 text-sm font-normal text-gray-700 ">Kurang Erat</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p10e" type="radio" name="p10"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="5">
                            <label for="p10e" class="ml-2 text-sm font-normal text-gray-700 ">Tidak Sama
                                Sekali</label>
                        </div>

                    </div>
                </div>

                {{-- pertanyaan 11 --}}
                <div class="grid grid-cols-6  gap-1 md:gap-6 border-b-0 sm:border-b mb-4">

                    <div class="col-span-6 sm:col-span-3">
                        <label for="" class="block text-sm font-medium text-gray-700">11. Tingkat pendidikan apa
                            yang paling tepat/sesuai untuk pekerjaan anda saat ini?</label>
                    </div>
                    <div class="col-span-6 sm:col-span-3 border-b sm:border-b-0 pb-4 sm:pb-2">
                        <div class="flex items-center mb-1">
                            <input id="p11a" type="radio" name="p11"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
                                value="1">
                            <label for="p11a" class="ml-2 text-sm font-normal text-gray-700 ">Setingkat Lebih
                                Tinggi</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p11b" type="radio" name="p11"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="2">
                            <label for="p11b" class="ml-2 text-sm font-normal text-gray-700 ">Tingkat yang
                                Sama</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p11c" type="radio" name="p11"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="3">
                            <label for="p11c" class="ml-2 text-sm font-normal text-gray-700 ">Setingkat Lebih
                                Rendah</label>
                        </div>
                        <div class="flex items-center mb-1">
                            <input id="p11d" type="radio" name="p11"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                                value="4">
                            <label for="p11d" class="ml-2 text-sm font-normal text-gray-700 ">Tidak Perlu Pendidikan Tinggi</label>
                        </div>


                    </div>
                </div>

                {{-- pertanyaan 12 --}}
                <div class="grid grid-cols-12  gap-1 md:gap-6 border-b-0 sm:border-b mb-4">

                    <div class="col-span-12 sm:col-span-12">
                        <label for="" class="block text-sm font-medium text-gray-700">12. Pada saat lulus, pada
                            tingkat mana kompetensi dibawah ini yang Anda kuasai? <span class="font-bold">(A)</span>
                            </br>Pada saat ini, pada tingkat mana kompetensi di bawah ini diperlukan dalam pekerjaan?
                            <span class="font-bold">(B)</span></label>
                    </div>

                    <div class="col-span-12">

                        <div class="overflow-x-auto relative sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr class="text-center">
                                        <th scope="col" class=" px-0 py-3 sm:px-6 w-1/3">
                                            A
                                        </th>
                                        <th scope="col" class=" px-0 py-3 sm:px-6 w-1/3">
                                            Kompetensi
                                        </th>
                                        <th scope="col" class=" px-0 py-3 sm:px-6 w-1/3">
                                            B
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <td class="py-4 px-0 sm:px-6 text-center">
                                            <select id="p12a1" name="p12a1" autocomplete="p12a1"
                                                class="mt-1 rounded-md border border-gray-300 bg-white py-2 px-3  focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm">
                                                <option value="0">Pilih nilai</option>
                                                <option value="5">Sangat Baik</option>
                                                <option value="4">Baik</option>
                                                <option value="3">Cukup</option>
                                                <option value="2">Kurang Baik</option>
                                                <option value="1">Sangat Kurang Baik</option>
                                            </select>
                                        </td>
                                        <td class="py-4 px-0 sm:px-6 text-center">
                                            Etika
                                        </td>
                                        <td class="py-4 px-0 sm:px-6 text-center">
                                            <select id="p12a2" name="p12a2" autocomplete="p12a2"
                                                class="mt-1 rounded-md border border-gray-300 bg-white py-2 px-3  focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm">
                                                <option value="0">Pilih nilai</option>
                                                <option value="5">Sangat Baik</option>
                                                <option value="4">Baik</option>
                                                <option value="3">Cukup</option>
                                                <option value="2">Kurang Baik</option>
                                                <option value="1">Sangat Kurang Baik</option>
                                            </select>
                                        </td>

                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <td class="py-4 px-0 sm:px-6 text-center">
                                            <select id="p12b1" name="p12b1" autocomplete="p12b1"
                                                class="mt-1 rounded-md border border-gray-300 bg-white py-2 px-3  focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm">
                                                <option value="0">Pilih nilai</option>
                                                <option value="5">Sangat Baik</option>
                                                <option value="4">Baik</option>
                                                <option value="3">Cukup</option>
                                                <option value="2">Kurang Baik</option>
                                                <option value="1">Sangat Kurang Baik</option>
                                            </select>
                                        </td>
                                        <td class="py-4 px-0 sm:px-6 text-center">
                                            Keahlian berdasarkan bidang ilmu (profesionalisme)
                                        </td>
                                        <td class="py-4 px-0 sm:px-6 text-center">
                                            <select id="p12b2" name="p12b2" autocomplete="p12b2"
                                                class="mt-1 rounded-md border border-gray-300 bg-white py-2 px-3  focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm">
                                                <option value="0">Pilih nilai</option>
                                                <option value="5">Sangat Baik</option>
                                                <option value="4">Baik</option>
                                                <option value="3">Cukup</option>
                                                <option value="2">Kurang Baik</option>
                                                <option value="1">Sangat Kurang Baik</option>
                                            </select>
                                        </td>

                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <td class="py-4 px-0 sm:px-6 text-center">
                                            <select id="p12c1" name="p12c1" autocomplete="p12c1"
                                                class="mt-1 rounded-md border border-gray-300 bg-white py-2 px-3  focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm">
                                                <option value="0">Pilih nilai</option>
                                                <option value="5">Sangat Baik</option>
                                                <option value="4">Baik</option>
                                                <option value="3">Cukup</option>
                                                <option value="2">Kurang Baik</option>
                                                <option value="1">Sangat Kurang Baik</option>
                                            </select>
                                        </td>
                                        <td class="py-4 px-0 sm:px-6 text-center">
                                            Bahasa Inggris
                                        </td>
                                        <td class="py-4 px-0 sm:px-6 text-center">
                                            <select id="p12c2" name="p12c2" autocomplete="p12c2"
                                                class="mt-1 rounded-md border border-gray-300 bg-white py-2 px-3  focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm">
                                                <option  value="0">Pilih nilai</option>
                                                <option value="5">Sangat Baik</option>
                                                <option value="4">Baik</option>
                                                <option value="3">Cukup</option>
                                                <option value="2">Kurang Baik</option>
                                                <option value="1">Sangat Kurang Baik</option>
                                            </select>
                                        </td>

                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <td class="py-4 px-0 sm:px-6 text-center">
                                            <select id="p12d1" name="p12d1" autocomplete="p12d1"
                                                class="mt-1 rounded-md border border-gray-300 bg-white py-2 px-3  focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm">
                                                <option value="0">Pilih nilai</option>
                                                <option value="5">Sangat Baik</option>
                                                <option value="4">Baik</option>
                                                <option value="3">Cukup</option>
                                                <option value="2">Kurang Baik</option>
                                                <option value="1">Sangat Kurang Baik</option>
                                            </select>
                                        </td>
                                        <td class="py-4 px-0 sm:px-6 text-center">
                                            Penggunaan Teknologi Informasi
                                        </td>
                                        <td class="py-4 px-0 sm:px-6 text-center">
                                            <select id="p12d2" name="p12d2" autocomplete="p12d2"
                                                class="mt-1 rounded-md border border-gray-300 bg-white py-2 px-3  focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm">
                                                <option value="0">Pilih nilai</option>
                                                <option value="5">Sangat Baik</option>
                                                <option value="4">Baik</option>
                                                <option value="3">Cukup</option>
                                                <option value="2">Kurang Baik</option>
                                                <option value="1">Sangat Kurang Baik</option>
                                            </select>
                                        </td>

                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <td class="py-4 px-0 sm:px-6 text-center">
                                            <select id="p12e1" name="p12e1" autocomplete="p12e1"
                                                class="mt-1 rounded-md border border-gray-300 bg-white py-2 px-3  focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm">
                                                <option value="0">Pilih nilai</option>
                                                <option value="5">Sangat Baik</option>
                                                <option value="4">Baik</option>
                                                <option value="3">Cukup</option>
                                                <option value="2">Kurang Baik</option>
                                                <option value="1">Sangat Kurang Baik</option>
                                            </select>
                                        </td>
                                        <td class="py-4 px-0 sm:px-6 text-center">
                                            Komunikasi
                                        </td>
                                        <td class="py-4 px-0 sm:px-6 text-center">
                                            <select id="p12e2" name="p12e2" autocomplete="p12e2"
                                                class="mt-1 rounded-md border border-gray-300 bg-white py-2 px-3  focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm">
                                                <option value="0">Pilih nilai</option>
                                                <option value="5">Sangat Baik</option>
                                                <option value="4">Baik</option>
                                                <option value="3">Cukup</option>
                                                <option value="2">Kurang Baik</option>
                                                <option value="1">Sangat Kurang Baik</option>
                                            </select>
                                        </td>

                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <td class="py-4 px-0 sm:px-6 text-center">
                                            <select id="p12f1" name="p12a1" autocomplete="p12f1"
                                                class="mt-1 rounded-md border border-gray-300 bg-white py-2 px-3  focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm">
                                                <option value="0">Pilih nilai</option>
                                                <option value="5">Sangat Baik</option>
                                                <option value="4">Baik</option>
                                                <option value="3">Cukup</option>
                                                <option value="2">Kurang Baik</option>
                                                <option value="1">Sangat Kurang Baik</option>
                                            </select>
                                        </td>
                                        <td class="py-4 px-0 sm:px-6 text-center">
                                            Kerjasama tim
                                        </td>
                                        <td class="py-4 px-0 sm:px-6 text-center">
                                            <select id="p12f2" name="p12f2" autocomplete="p12f2"
                                                class="mt-1 rounded-md border border-gray-300 bg-white py-2 px-3  focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm">
                                                <option value="0">Pilih nilai</option>
                                                <option value="5">Sangat Baik</option>
                                                <option value="4">Baik</option>
                                                <option value="3">Cukup</option>
                                                <option value="2">Kurang Baik</option>
                                                <option value="1">Sangat Kurang Baik</option>
                                            </select>
                                        </td>

                                    </tr>
                                    <tr class="bg-white ">
                                        <td class="py-4 px-0 sm:px-6 text-center">
                                            <select id="p12g1" name="p12g1" autocomplete="p12g1"
                                                class="mt-1 rounded-md border border-gray-300 bg-white py-2 px-3  focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm">
                                                <option value="0">Pilih nilai</option>
                                                <option value="5">Sangat Baik</option>
                                                <option value="4">Baik</option>
                                                <option value="3">Cukup</option>
                                                <option value="2">Kurang Baik</option>
                                                <option value="1">Sangat Kurang Baik</option>
                                            </select>
                                        </td>
                                        <td class="py-4 px-0 sm:px-6 text-center">
                                            Pengembangan diri
                                        </td>
                                        <td class="py-4 px-0 sm:px-6 text-center">
                                            <select id="p12g2" name="p12g2" autocomplete="p12g2"
                                                class="mt-1 rounded-md border border-gray-300 bg-white py-2 px-3  focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm">
                                                <option value="0">Pilih nilai</option>
                                                <option value="5">Sangat Baik</option>
                                                <option value="4">Baik</option>
                                                <option value="3">Cukup</option>
                                                <option value="2">Kurang Baik</option>
                                                <option value="1">Sangat Kurang Baik</option>
                                            </select>
                                        </td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

            {{-- KUESIONER OPTIONAL --}}
            <div class="flex-none mt-3 mb-3 text-left">
                <span class=" bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-2 rounded">KUESIONER OPSIONAL</span>
            </div>

            {{-- pertanyaan 13 --}}
            <div class="grid grid-cols-6  gap-1 md:gap-6 border-b-0 sm:border-b mb-4">

                <div class="col-span-6 sm:col-span-3">
                    <label for="" class="block text-sm font-medium text-gray-700">1. Menurut anda seberapa besar penekanan pada metode pembelajaran di bawah ini
                        dilaksanakan di program studi anda?</label>
                </div>
                <div class="col-span-6 sm:col-span-3 border-b sm:border-b-0 pb-4 sm:pb-2">
                    <div class="flex flex-col mb-1 mt-2 sm:mt-0">
                        <label for="p13a" class="block text-sm font-medium text-gray-700">Perkuliahan</label>
                        <select id="p13a" name="p13a" autocomplete="p13a"
                            class="text-gray-500 mt-1 rounded-md border border-gray-300 bg-white py-2 px-3  focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm">
                            <option value="0">Pilih nilai</option>
                            <option value="5">Sangat Besar</option>
                            <option value="4">Besar</option>
                            <option value="3">Cukup</option>
                            <option value="2">Kurang</option>
                            <option value="1">Tidak Sama Sekali</option>
                        </select>
                    </div>
                    <div class="flex flex-col mb-1 mt-2 sm:mt-2">
                        <label for="p13b" class="block text-sm font-medium text-gray-700">Demonstrasi</label>
                        <select id="p13b" name="p13b" autocomplete="p13b"
                            class="text-gray-500 mt-1 rounded-md border border-gray-300 bg-white py-2 px-3  focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm">
                            <option value="0">Pilih nilai</option>
                            <option value="5">Sangat Besar</option>
                            <option value="4">Besar</option>
                            <option value="3">Cukup</option>
                            <option value="2">Kurang</option>
                            <option value="1">Tidak Sama Sekali</option>
                        </select>
                    </div>
                    <div class="flex flex-col mb-1 mt-2 sm:mt-2">
                        <label for="p13c" class="block text-sm font-medium text-gray-700">Partisipasi dalam proyek riset</label>
                        <select id="p13c" name="p13c" autocomplete="p13c"
                            class="text-gray-500 mt-1 rounded-md border border-gray-300 bg-white py-2 px-3  focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm">
                            <option value="0">Pilih nilai</option>
                            <option value="5">Sangat Besar</option>
                            <option value="4">Besar</option>
                            <option value="3">Cukup</option>
                            <option value="2">Kurang</option>
                            <option value="1">Tidak Sama Sekali</option>
                        </select>
                    </div>
                    <div class="flex flex-col mb-1 mt-2 sm:mt-2">
                        <label for="p13d" class="block text-sm font-medium text-gray-700">Magang</label>
                        <select id="p13d" name="p13d" autocomplete="p13d"
                            class="text-gray-500 mt-1 rounded-md border border-gray-300 bg-white py-2 px-3  focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm">
                            <option value="0">Pilih nilai</option>
                            <option value="5">Sangat Besar</option>
                            <option value="4">Besar</option>
                            <option value="3">Cukup</option>
                            <option value="2">Kurang</option>
                            <option value="1">Tidak Sama Sekali</option>
                        </select>
                    </div>
                    <div class="flex flex-col mb-1 mt-2 sm:mt-2">
                        <label for="p13e" class="block text-sm font-medium text-gray-700">Praktikum</label>
                        <select id="p13e" name="p13e" autocomplete="p13e"
                            class="text-gray-500 mt-1 rounded-md border border-gray-300 bg-white py-2 px-3  focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm">
                            <option value="0">Pilih nilai</option>
                            <option value="5">Sangat Besar</option>
                            <option value="4">Besar</option>
                            <option value="3">Cukup</option>
                            <option value="2">Kurang</option>
                            <option value="1">Tidak Sama Sekali</option>
                        </select>
                    </div>
                    <div class="flex flex-col mb-1 mt-2 sm:mt-2">
                        <label for="p13f" class="block text-sm font-medium text-gray-700">Kerja Lapangan</label>
                        <select id="p13f" name="p13f" autocomplete="p13f"
                            class="text-gray-500 mt-1 rounded-md border border-gray-300 bg-white py-2 px-3  focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm">
                            <option value="0">Pilih nilai</option>
                            <option value="5">Sangat Besar</option>
                            <option value="4">Besar</option>
                            <option value="3">Cukup</option>
                            <option value="2">Kurang</option>
                            <option value="1">Tidak Sama Sekali</option>
                        </select>
                    </div>
                    <div class="flex flex-col mb-1 mt-2 sm:mt-2">
                        <label for="p13g" class="block text-sm font-medium text-gray-700">Diskusi</label>
                        <select id="p13g" name="p13g" autocomplete="p13g"
                            class="text-gray-500 mt-1 rounded-md border border-gray-300 bg-white py-2 px-3  focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 text-sm">
                            <option value="0">Pilih nilai</option>
                            <option value="5">Sangat Besar</option>
                            <option value="4">Besar</option>
                            <option value="3">Cukup</option>
                            <option value="2">Kurang</option>
                            <option value="1">Tidak Sama Sekali</option>
                        </select>
                    </div>
                  
                </div>
            </div>

            {{-- pertanyaan 14 --}}
            <div class="grid grid-cols-6  gap-1 md:gap-6 border-b-0 sm:border-b mb-4">

                <div class="col-span-6 sm:col-span-3">
                    <label for="" class="block text-sm font-medium text-gray-700">2. Kapan Anda mulai mencari pekerjaan? <span class="italic">Mohon pekerjaan sambilan tidak dimasukan</span></label>
                </div>
                <div class="col-span-6 sm:col-span-3 border-b sm:border-b-0 pb-4 sm:pb-2">
                    <div class="flex items-center mb-1 mt-2 sm:mt-0">
                        <label for="p14a" class="block text-sm font-normal text-gray-700">Kira-kira</label>
                        <input placeholder="contoh : 3" type="text" id="p14a" name="p14a"
                                class="mx-3 mt-1 text-sm block  p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                        <span class="block text-sm font-normal text-gray-700">bulan sebelum lulus</span>
                    </div>

                    <div class="flex items-center mb-1 mt-2 sm:mt-0">
                        <label for="p14b" class="block text-sm font-normal text-gray-700">Kira-kira</label>
                        <input placeholder="contoh : 3" type="text" id="p14b" name="p14b"
                                class="mx-3 mt-1 text-sm block  p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                        <span class="block text-sm font-normal text-gray-700">bulan sebelum lulus</span>
                    </div>

                    <div class="flex items-center mb-1 mt-2 sm:mt-0">
                        <input id="p14c" type="radio" name="p14c"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="1">
                        <label for="p14c" class="ml-2 text-sm font-normal text-gray-700 ">Saya tidak mencari pekerjaan</label>
                    </div>
                </div>
            </div>

             {{-- pertanyaan 15 --}}
             <div class="grid grid-cols-6  gap-1 md:gap-6 border-b-0 sm:border-b mb-4">

                <div class="col-span-6 sm:col-span-3">
                    <label for="" class="block text-sm font-medium text-gray-700">3. Bagaimana Anda mencari pekerjaan tersebut? <span class="italic">Jawaban bisa lebih dari satu</span></label>
                </div>
                <div class="col-span-6 sm:col-span-3 border-b sm:border-b-0 pb-4 sm:pb-2">
                   
                    <div class="flex items-center mb-2">
                        <input id="p15a"  name="p15a" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p15a" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Melalui iklan di koran/majalah, brosur</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="p15b" name="p15b" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p15b" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Melamar ke perusahaan tanpa mengatuhi lowongan yang ada</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="p15c" name="p15c" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p15c" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Pergi ke bursa/pameran kerja</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="p15d" name="p15d" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p15d" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Mencari lewat internet/iklan online/milis</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="p15e" name="p15e" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p15e" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Dihubungi oleh perusahaan</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="p15f" name="p15f" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p15f" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Menghubungi Kemenakertrans</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="p15g" name="p15g" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p15g" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Menghubungi agen tenaga kerja komersial/swasta</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="p15h" name="p15h" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p15h" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Memperoleh informasi dari pusat/kantor pengembangan karir fakultas/universitas</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="p15i" name="p15i" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p15i" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Menghubungi kantor kemahasiswaan/hubungan alumni</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="p15j" name="p15j" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p15j" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Membangun jejaring (network) sejak masih kuliah</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="p15k" name="p15k" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p15k" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll)</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="p15l" name="p15l" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p15l" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Membangun bisnis sendiri</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="p15m" name="p15m" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p15m" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Melalui penempatan kerja atau magang</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="p15n" name="p15n" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p15n" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Bekerja di tempat yang sama dengan tempat kerja semasa kuliah</label>
                    </div>
                    <div class="flex items-center mb-1 mt-2 sm:mt-0">
                        <label for="p15o" name="p15o" class="block text-sm font-normal text-gray-700">Lainnya:</label>
                        <input placeholder="" type="text" id="p15o" name="p15o"
                                class="w-full mx-3 mt-1 text-sm block  p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                        
                    </div>
                   

                </div>
            </div>

            {{-- pertanyaan 16 --}}
            <div class="grid grid-cols-6  gap-1 md:gap-6 border-b-0 sm:border-b mb-4">

                <div class="col-span-6 sm:col-span-3">
                    <label for="" class="block text-sm font-medium text-gray-700">4. Berapa perusahaan/instansi/institusi yang sudah Anda lamar (lewat surat atau email)
                        sebelum Anda memperoleh pekerjaan?</label>
                </div>
                <div class="col-span-6 sm:col-span-3 border-b sm:border-b-0 pb-4 sm:pb-2">
                    <div class="flex items-center mb-1 mt-2 sm:mt-0">
                       
                        <input placeholder="contoh : 3" type="text" id="p16" name="p16"
                                class="mr-3 mt-1 text-sm block  p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                        <span class="block text-sm font-normal text-gray-700">Perusahaan/instansi/institusi</span>
                    </div>

                </div>
            </div>

            {{-- pertanyaan 17 --}}
            <div class="grid grid-cols-6  gap-1 md:gap-6 border-b-0 sm:border-b mb-4">

                <div class="col-span-6 sm:col-span-3">
                    <label for="" class="block text-sm font-medium text-gray-700">5. Berapa banyak perusahaan/instansi/institusi yang merespon lamaran Anda?</label>
                </div>
                <div class="col-span-6 sm:col-span-3 border-b sm:border-b-0 pb-4 sm:pb-2">
                    <div class="flex items-center mb-1 mt-2 sm:mt-0">
                       
                        <input placeholder="contoh : 3" type="text" id="p17" name="p17"
                                class="mr-3 mt-1 text-sm block  p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                        <span class="block text-sm font-normal text-gray-700">Perusahaan/instansi/institusi</span>
                    </div>

                </div>
            </div>

            {{-- pertanyaan 18 --}}
            <div class="grid grid-cols-6  gap-1 md:gap-6 border-b-0 sm:border-b mb-4">

                <div class="col-span-6 sm:col-span-3">
                    <label for="" class="block text-sm font-medium text-gray-700">6. Berapa banyak perusahaan/instansi/institusi yang mengundang Anda untuk
                        wawancara?</label>
                </div>
                <div class="col-span-6 sm:col-span-3 border-b sm:border-b-0 pb-4 sm:pb-2">
                    <div class="flex items-center mb-1 mt-2 sm:mt-0">
                       
                        <input placeholder="contoh : 3" type="text" id="p18" name="p18"
                                class="mr-3 mt-1 text-sm block  p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                        <span class="block text-sm font-normal text-gray-700">Perusahaan/instansi/institusi</span>
                    </div>

                </div>
            </div>

             {{-- pertanyaan 19 --}}
             <div class="grid grid-cols-6  gap-1 md:gap-6 border-b-0 sm:border-b mb-4">

                <div class="col-span-6 sm:col-span-3">
                    <label for="" class="block text-sm font-medium text-gray-700">7. Bagaimana Anda menggambarkan situasi Anda saat ini? <span class="italic">Jawaban bisa lebih dari satu</span></label>
                </div>
                <div class="col-span-6 sm:col-span-3 border-b sm:border-b-0 pb-4 sm:pb-2">
                   
                    <div class="flex items-center mb-2">
                        <input id="p19a" name="p19a" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p19a" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana </label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="p19b" name="p19b" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p19b" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Saya menikah</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="p19c"  name="p19c" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p19c" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Saya sibuk dengan keluarga dan anak-anak</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="p19d" name="p19d" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p19d" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Saya sekarang sedang mencari pekerjaan</label>
                    </div>
                   
                    <div class="flex items-center mb-1 mt-2 sm:mt-0">
                        <label for="p19e" name="p19e" class="block text-sm font-normal text-gray-700">Lainnya:</label>
                        <input placeholder="" type="text" id="p19e" name="p19e"
                        class="w-full mx-3 mt-1 text-sm block  p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                        
                    </div>
                   

                </div>
            </div>

             {{-- pertanyaan 20 --}}
             <div class="grid grid-cols-6  gap-1 md:gap-6 border-b-0 sm:border-b mb-4">

                <div class="col-span-6 sm:col-span-3">
                    <label for="" class="block text-sm font-medium text-gray-700">8. Apakah Anda aktif mencari pekerjaan dalam 4 minggu terakhir? <span class="italic">Pilihlah satu jawaban</span></label>
                </div>
                <div class="col-span-6 sm:col-span-3 border-b sm:border-b-0 pb-4 sm:pb-2">
                    <div class="flex items-center mb-1">
                        <input id="p20a" type="radio" name="p20"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
                            value="1">
                        <label for="p20a" class="ml-2 text-sm font-normal text-gray-700 ">Tidak</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p20b" type="radio" name="p20"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
                            value="2">
                        <label for="p20b" class="ml-2 text-sm font-normal text-gray-700 ">Tidak, tapi saya sedang menunggu hasil lamaran kerja</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p20c" type="radio" name="p20"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
                            value="3">
                        <label for="p20c" class="ml-2 text-sm font-normal text-gray-700 ">Ya, saya akan mulai bekerja dalam 2 minggu ke depan</label>
                    </div>
                    <div class="flex items-center mb-1">
                        <input id="p20d" type="radio" name="p20"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
                            value="4">
                        <label for="p20d" class="ml-2 text-sm font-normal text-gray-700 ">Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan</label>
                    </div>


                    
                    <div class="flex items-center mb-1">
                        <input id="p20e" type="radio" name="p20"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2"
                            value="7">
                        <label for="p20e" class="ml-2 text-sm font-normal text-gray-700 ">Lainnya: </label>
                        <input type="text" id="p20f" name="p20f"
                            class=" ml-3 mt-1 text-sm block  p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                    </div>
                </div>
            </div>

            {{-- pertanyaan 21 --}}
            <div class="grid grid-cols-6  gap-1 md:gap-6 border-b-0 sm:border-b mb-4">

                <div class="col-span-6 sm:col-span-3">
                    <label for="" class="block text-sm font-medium text-gray-700">9. Jika menurut Anda pekerjaan Anda saat ini tidak sesuai dengan pendidikan Anda, mengapa
                        Anda mengambilnya? <span class="italic">Jawaban bisa lebih dari satu</span></label>
                </div>
                <div class="col-span-6 sm:col-span-3 border-b sm:border-b-0 pb-4 sm:pb-2">
                   
                    <div class="flex items-center mb-2">
                        <input id="p21a" name="p21a" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p21a" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Pertanyaan tidak sesuai, pekerjaan saya saat ini sudah sesuai dengan pendidikan
                            saya</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="p21b" name="p21b" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p21b" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Saya belum mendapatkan pekerjaan yang lebih sesuai dengan pendidikan saya</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="p21c" name="p21c" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p21c" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Di pekerjaan ini saya memperoleh prospek karir yang baik</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="p21d" name="p21d" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p21d" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan
                            pendidikan saya</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="p21e" name="p21e" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p21e" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya
                            dibanding posisi sebelumnya</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="p21f" name="p21f" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p21f" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Saya dapat memperoleh pendapatan yang lebih tinggi di pekerjaan ini</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="p21g" name="p21g" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p21g" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Pekerjaan saya saat ini lebih aman/terjamin/secure</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="p21h" name="p21h" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p21h" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Pekerjaan saya saat ini lebih menarik</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="p21i" name="p21i" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p21i" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan
                            tambahan/jadwal yang fleksibel, dll</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="p21j" name="p21j" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p21j" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya</label>
                    </div>
                    
                    <div class="flex items-center mb-2">
                        <input id="p21k" name="p21k" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p21k" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="p21l" name="p21l" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="p21l" class="ml-2 text-sm font-normal text-gray-700 dark:text-gray-300">Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan
                            dengan pendidikan saya</label>
                    </div>
                    
                   
                    <div class="flex items-center mb-1 mt-2 sm:mt-0">
                        <label for="p21m" class="block text-sm font-normal text-gray-700">Lainnya:</label>
                        <input placeholder="" type="text" id="p21m" name="p21m"
                        class="w-full mx-3 mt-1 text-sm block  p-2 sm:p-2.5 text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                        
                    </div>
                   

                </div>
            </div>

            <button type="submit" class="btn-primary">Kirim</button>
        </form>
    </div>
@endsection
