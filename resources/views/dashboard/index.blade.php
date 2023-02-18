@extends('_layouts.master')

@section('body')
    @if (auth()->user()->role == 'admin')
        {{-- <h3 class="text-navy text-3xl font-medium">Dashboard</h3> --}}

        <div class="mt-0">
            <div class="flex flex-wrap -mx-6">
                <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                    <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                        <div class="p-3 rounded-full bg-indigo-600 bg-opacity-75">
                            <img src="/images/icons/profil.svg" class="w-8 h-8">
                        </div>

                        <div class="mx-5">
                            <h4 class="text-2xl font-semibold text-gray-700">{{ $user }}</h4>
                            <div class="text-gray-500">Alumni</div>
                        </div>
                    </div>
                </div>

                <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                    <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                        <div class="p-3 rounded-full bg-orange-600 bg-opacity-75">
                            <img src="/images/icons/tracer.svg" class="w-8 h-8">
                        </div>

                        <div class="mx-5">
                            <h4 class="text-2xl font-semibold text-gray-700">{{ $tracer }}</h4>
                            <div class="text-gray-500">Total Tracer</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @else
        <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
            role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">Selamat Datang!</span> Bagi pengguna baru, silahkan melakukan pengisian <a
                    href="/profil" class="font-medium underline">profil alumni</a>
            </div>
        </div>


<div class="max-w-xl p-6 bg-white border border-gray-200 rounded-lg">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 mb-2 text-gray-500">
        <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
      </svg>
        <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $pengumuman->judul }}</h5>
    <p class="mb-3 font-normal text-gray-500">{{ $pengumuman->isi }}</p>

</div>

     
        

    @endif
@endsection
