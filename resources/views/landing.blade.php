@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

@include('components.navbar')

<div class="px-10 pt-20 bg-bege">
    <div class="grid grid-cols-12 gap-4 px-4 pb-4">
        <div class="col-span-12 grid grid-cols-8 gap-4 p-14">    
            <div class="col-span-3 p-4 rounded-sm bg-white shadow-md">
                <p class="text-xl font-bold text-huruf">Pembelajaran</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus soluta temporibus dolorum magnam officiis molestias error odit laborum facilis, quo amet non vero laudantium nobis esse laboriosam aut adipisci voluptatibus.</p>
            </div>
            <div class="col-span-5 flex justify-center items-center">
                <p>FOTO</p>
            </div>
        </div>  
    </div>
</div>

@endsection