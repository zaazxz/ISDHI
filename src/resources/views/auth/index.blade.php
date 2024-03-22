{{-- Extending template --}}
@extends('template.auth')

{{-- Section Content --}}
@section('content')
    <div class="row">

        {{-- Image : Start --}}
        <section class="col-6" style="height: 100dvh; background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('images/background-1.jpg') }}); background-size: cover; background-position: center">

        </section>
        {{-- Image : End --}}

    </div>
@endsection
