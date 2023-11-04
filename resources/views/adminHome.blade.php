@extends('layouts.app')
   
@section('title', 'Admin Home')

@section('content')

@include('components.sidebar')

<div class="ml-64 p-4">
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-12">
            <div class="text-center py-4">
                <p class="text-2xl font-medium text-[#65451F]">Selamat datang kembali, {{ auth()->user()->name }}</p>
            </div>
        </div>
        <div class="col-span-3 p-2 bg-[#EAC696] rounded-md flex items-center space-x-4 text-[#65451F] border-t-2 border-[#65451F] shadow-md shadow-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 ml-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
              </svg>                  
            <div class=" font-medium space-y-1">
                <p>Users</p>                
                <p>1</p>
            </div>
        </div>
        <div class="col-span-3 p-2 bg-[#EAC696] rounded-md flex items-center space-x-4 text-[#65451F] border-t-2 border-[#65451F] shadow-md shadow-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 ml-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>                  
            <div class=" font-medium space-y-1">
                <p>Transaction</p>                
                <p>1</p>
            </div>
        </div>
    </div>
</div>

@endsection