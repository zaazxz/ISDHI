@extends('auth.template.index')

{{-- Width Checking : Start --}}
@php
    $windowWidth = isset($windowWidth) ? $windowWidth : null;
@endphp
{{-- Width Checking : End --}}

@section('content')

    {{-- Mobile Design : Start --}}
    <section class="sm:block md:hidden lg:hidden xl:hidden 2xl:hidden">

        {{-- Image Header : Start --}}
        <div
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/background-1.jpg'); background-size: cover; background-position: center"
        class="h-[25vh] flex flex-col justify-center"
        >
            <h1 class="text-3xl font-bold p-5 pb-2 text-white">Halo!</h1>
            <p class="text-white p-5 pt-0 text-sm">
                Silahkan masuk untuk <br>
                menggunakan fitur website
            </p>
        </div>
        {{-- Image Header : End --}}

        {{-- Content : Start --}}
        <div class="block h-fit mt-[-20px] bg-white rounded-t-lg p-5">
            <form action="">

                <div class="input-group border border-gray-300 flex flex-col rounded">
                    <label for="username" class="mb-[-23px] pt-4 pb-4 pl-2 text-gray-500 transition-all" id="label-username">Username</label>
                    <input type="text" name="username" id="username" placeholder="Masukkan username" class="opacity-0 m-1 pl-1 focus:opacity-100 focus:outline-none focus:pb-1 focus:mb-[6px] transition">
                </div>

            </form>
        </div>
        {{-- Content : End --}}

    </section>
    {{-- Mobile Design : End --}}

    {{-- Small Desktop Design : Start --}}
    <section class="hidden sm:hidden md:block lg:hidden xl:hidden 2xl:hidden">
        Tablet or IPad Design
    </section>
    {{-- Small Desktop Design : End --}}

    {{-- Large Desktop Design : Start --}}
    <section class="hidden sm:hidden md:hidden lg:block">
        Desktop Design
    </section>
    {{-- Large Desktop Design : End --}}

@endsection
