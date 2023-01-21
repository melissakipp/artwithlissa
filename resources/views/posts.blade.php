<x-post-layout>
        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

            <x-post-featured-card :post="$posts[0]" />

            <div class="lg:grid lg:grid-cols-2">
                 This is where the two row column was
                <x-post-card />
                <x-post-card />
            </div>

            <div class="lg:grid lg:grid-cols-3">
                 This is where the three row column was
                <x-post-card />
                <x-post-card />
                <x-post-card />
            </div>
        </main>
</x-post-layout>



{{--@extends('layouts.post')--}}
{{--The view (main content) for the layout index page--}}
{{--@section('content')--}}

{{--   @include('posts._posts-header')--}}

{{--    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">--}}

{{--        <x-post-featured-card :post="$posts[0]" />--}}

{{--        <div class="lg:grid lg:grid-cols-2">--}}
{{--            --}}{{-- This is where the two row column was --}}
{{--            <x-post-card />--}}
{{--            <x-post-card />--}}
{{--        </div>--}}

{{--        <div class="lg:grid lg:grid-cols-3">--}}
{{--            --}}{{-- This is where the three row column was --}}
{{--            <x-post-card />--}}
{{--            <x-post-card />--}}
{{--            <x-post-card />--}}
{{--        </div>--}}
{{--    </main>--}}

{{--@endsection--}}

