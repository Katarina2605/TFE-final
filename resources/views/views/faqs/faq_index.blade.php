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
    <a href="/">
        <img src="https://images2.imgbox.com/1d/51/kCr2UV0P_o.png" alt="Respons'adopt logo" class="h-12">
    </a>
</div>

<!-- FAQ -->
<h2 class="text-center text-2xl font-semibold mb-6">Foire aux questions</h2>
<div class="flex justify-center mb-6">
    <a href="{{ route('faqs.create') }}" class="btn bg-blue-500 hover:bg-blue-700 text-white px-3 py-2 rounded-md transition-colors">Ajouter une question</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    @foreach ($faqs as $faq)
        <div class="p-6 border rounded-lg shadow-md">
            <h3 class="text-xl font-semibold mb-2">{{ $faq->question }}</h3>
            <p class="text-gray-700 mb-4">{{ $faq->answer }}</p>
            <div class="flex justify-end">
                <a href="{{ route('faqs.edit', $faq->id) }}" class="btn btn-secondary mr-2 bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">Éditer</a>
                <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Supprimer</button>

                </form>
            </div>
        </div>
    @endforeach
</div>

<!-- /FAQ -->
</body>

</html>
