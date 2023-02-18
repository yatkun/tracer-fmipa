@extends('_layouts.master')

@section('body')

    <h3 class="text-navy text-3xl font-medium"></h3>


    <div class="overflow-x-auto relative rounded-lg">
        <div class="bg-white p-2">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <div class="flex justify-between items-center">
                    <div class=" p-5 text-lg font-semibold text-left text-navy">
                        Data Tracer
                    </div>
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="search"
                            class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-48 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Cari data tracer">
                    </div>
                </div>
                
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            No
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Nama Lengkap
                        </th>
                      
                        <th scope="col" class="py-3 px-6">
                            Program Studi
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Waktu Pengisian
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($alumni as $data)
                    <tr class="bg-white border-b">
                        <td class="py-4 px-6">
                            {{ $no++ }}
                        </td>
                        <td class="py-4 px-6 text-gray-900 whitespace-nowrap ">
                           {{ $data->user->namalengkap }}
                        </td>
                      
                        <td class="py-4 px-6">
                            {{ $data->user->prodi }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $data->created_at->format('d-m-Y') }}
                        </td>
                        <td class="py-4 px-6">
                            <a href="data-tracer/lihat/{{ $data->id }}"
                                class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-1 text-center inline-flex items-center mr-2 ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
    
                            </a>
                            <a href="{{ route('data-tracer.destroy', $data->id) }}"
                                class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-1 text-center inline-flex items-center mr-2 "
                                onclick="event.preventDefault(); if(confirm('Apakah anda yakin untuk menghapus data {{ $data->namalengkap }} ?')) { document.getElementById('delete-form-{{ $data->id }}').submit(); }">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
    
    
                            </a>
    
                            <form id="delete-form-{{ $data->id }}" action="{{ route('data-tracer.destroy', $data->id) }}"
                                method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    

   
@endsection
