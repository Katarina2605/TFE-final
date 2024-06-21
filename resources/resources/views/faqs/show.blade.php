@extends('layouts.app')

@section('content')
    <h1>{{ $faq->question }}</h1>
    <p>{{ $faq->answer }}</p>
    <a href="{{ route('faqs.index') }}">Retour à la liste</a>
@endsection




