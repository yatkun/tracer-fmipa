@extends('_layouts.master')

@section('body')
<div class="max-w-lg p-6 bg-white border border-gray-200 rounded-lg">

    <form method="POST" action="{{ route('pengumuman.store') }}">
        @csrf
        <div class="mb-6">
            <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul
                Pengumuman</label>
            <input type="text" id="judul" name="judul"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="Masukkan judul pengumuman" required>
        </div>
        <div class="mb-6">

            <label for="isi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isi Pengumuman</label>
            <textarea id="isi" rows="5" name="isi"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Masukkan isi pengumuman..."></textarea>

        </div>
    
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
    </form>

</div>
@endsection