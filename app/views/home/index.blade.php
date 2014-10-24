@extends('layouts.master')

@section('content')
    <div class="container">
        @include('partials.header')

        <section class="media-grid">
            @foreach ($photos as $media)
                @include('partials.media', ['media' => $media])
            @endforeach
        </section>

        @include('partials.footer')
    </div>
@stop
