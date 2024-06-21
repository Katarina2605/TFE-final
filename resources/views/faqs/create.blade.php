@extends('layouts.app')

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Sergey Pozhilov (GetTemplate.com)">

    <title>Refuges du Brabant Wallon - Respons'adopt</title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.png">

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-900">

<div class="flex justify-center items-center">
    <a href="index">
        <img src="https://images2.imgbox.com/02/1c/5NbeQqGJ_o.png" alt="Respons'adopt logo" class="h-12">
    </a>
</div>

<!-- EDITER UNE QUESTION  -->

@section('content')
    <div class="container mx-auto py-16">
        <h2 class="text-center text-2xl font-semibold">Ajouter une nouvelle question</h2>
        <br>

        <form action="{{ route('faqs.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="question" class="block text-gray-700">Question</label>
                <input type="text" name="question" id="question" class="w-full px-4 py-2 mt-2 border rounded-md">
            </div>
            <div class="mb-4">
                <label for="answer" class="block text-gray-700">Réponse</label>
                <textarea name="answer" id="answer" class="w-full px-4 py-2 mt-2 border rounded-md"></textarea>
            </div>
            <div class="mb-4">
                <button type="submit" class="btn bg-blue-500 hover:bg-blue-700 text-white px-6 py-3 rounded-md transition-colors">Publier</button>
            </div>
        </form>
    </div>
@endsection

