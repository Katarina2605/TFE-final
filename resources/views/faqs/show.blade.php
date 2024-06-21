@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-16">
        <h2 class="text-center text-2xl font-semibold">{{ $faq->question }}</h2>
        <br>

        <div class="mt-8">
            <p class="text-gray-700">{{ $faq->answer }}</p>
        </div>
    </div>
@endsection


