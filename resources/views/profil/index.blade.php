@extends('_layouts.master')

@section('body')

<div class="bg-white rounded p-5">
    @if (session('successupdate'))
    <div id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Info</span>
        <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
            {{ session('successupdate') }}
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
    <form action="{{ route('profil.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-12 gap-5">
            <div class="md:col-span-3 col-span-12">
                <div class="flex flex-col">
                    <img src="{{ asset('/images/foto/'.auth()->user()->foto) }}" class="rounded-full w-40 h-40 mx-auto object-cover">
                    {{-- <div class="text-center mt-5">
                        <a href="" class="btn-primary text-center">Ganti foto</a>
                    </div> --}}
                    <input
                        class="block w-full mt-3 mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="small_size" type="file" name="foto">

                </div>
            </div>
            <div class="md:col-span-9 col-span-12 ">


                <div class="mb-3">
                    <label for="namalengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Lengkap</label>
                    <input type="text" id="namalengkap" name="namalengkap"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="masukkan nama lengkap" required value="{{ $user->namalengkap }}">
                </div>
                <div class="mb-3">
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Pengguna</label>
                    <input type="text" id="username" name="username"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="masukkan nama pengguna" required value="{{ $user->username }}">
                    @error('username')

                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="prodi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Program
                        Studi</label>
                    <select id="prodi" name="prodi"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Pilih Program Studi</option>
                        <option value="Statistika" {{ $user->prodi == 'Statistika' ? 'selected' : '' }}>Statistika
                        </option>
                        <option value="Matematika" {{ $user->prodi == 'Matematika' ? 'selected' : '' }}>Matematika
                        </option>

                    </select>
                </div>
                <div class="mb-3">
                    <label for="tahunlulus" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun
                        Lulus</label>
                    <input type="text" id="tahunlulus" name="tahunlulus"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="contoh : 2019" required value="{{ $user->tahunlulus }}">
                </div>

                <div class="mb-3">
                    <label for="alamat"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                    <input type="text" id="alamat" name="alamat"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Masukkan alamat" value="{{ $user->alamat }}">
                </div>
                <div class="mb-3">
                    <label for="email"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" id="email" name="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Masukkan email" value="{{ $user->email }}">
                </div>
                <div class="mb-3">
                    <label for="nohp"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.HP/Whatsapp</label>
                    <input type="text" id="nohp" name="nohp"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Masukkan no.hp/whatsapp" value="{{ $user->nohp }}">
                </div>
                <div class="mb-3">
                    <label for="pekerjaan"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan</label>
                    <input type="text" id="pekerjaan" name="pekerjaan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Masukkan pekerjaan" value="{{ $user->pekerjaan }}">
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
    </form>

</div>
</div>
</div>



@endsection