<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages reçus - Respons'adopt</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

<!-- Fixed navbar -->
<div class="fixed top-0 w-full bg-gray-800 text-white shadow-lg z-50">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between py-3">
            <div class="flex items-center">
                <a class="ml-4" href="/">
                    <img src="https://images2.imgbox.com/67/c5/KobvRJUU_o.png" alt="Respons'adopt logo" class="h-12">
                </a>
            </div>
            <div class="md:flex md:items-center">
                <ul class="hidden md:flex space-x-6">
                    <li><a href="/" class="hover:underline text-white">Accueil</a></li>
                    <li><a href="/refuges" class="hover:underline text-white">Refuges</a></li>
                    <li><a href="/legislations" class="hover:underline text-white">Législations</a></li>
                    <li><a href="/contact" class="hover:underline text-white">Contact</a></li>
                </ul>
            </div>

            <!-- Menu hamburger pour les petites tailles d'écran -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" class="text-gray-500 hover:text-gray-900 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>

            <!-- Menu déroulant pour les petites tailles d'écran -->
            <div id="mobile-menu" class="hidden md:hidden">
                <ul class="flex flex-col mt-2 space-y-2">
                    <li><a href="/" class="block px-4 py-2 text-sm text-white hover:text-black hover:bg-gray-100">Accueil</a></li>
                    <li><a href="/refuges" class="block px-4 py-2 text-sm text-white hover:text-black hover:bg-gray-100">Refuges</a></li>
                    <li><a href="/legislations" class="block px-4 py-2 text-sm text-white hover:text-black hover:bg-gray-100">Législations</a></li>
                    <li><a href="/contact" class="block px-4 py-2 text-sm text-white hover:text-black hover:bg-gray-100">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<header id="head" class="bg-gray-200 h-20 mb-8"></header>

<!-- Main Content -->
<div class="container mx-auto px-4 mt-20">
    @if(session('status'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('status') }}</span>
        </div>
    @endif

    <nav class="bg-white py-3 rounded mb-4 shadow">
        <ol class="list-reset flex">
            <li class="ml-2"><a href="/" class="text-blue-500">Accueil</a></li>
            <li class="text-gray-500 mx-2">/</li>
            <li class="ml-2 text-gray-500">Messages reçus</li>
        </ol>
    </nav>

    <div class="bg-white p-6 rounded shadow mb-4">
        <h1 class="text-2xl font-bold mb-4">Messages reçus</h1>
        <table class="min-w-full bg-white">
            <thead>
            <tr>
                <th class="py-2 px-4 bg-gray-200">Email</th>
                <th class="py-2 px-4 bg-gray-200">Message</th>
                <th class="py-2 px-4 bg-gray-200">Reçu le</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td class="border px-4 py-2">{{ $contact->email }}</td>
                    <td class="border px-4 py-2">{{ $contact->message }}</td>
                    <td class="border px-4 py-2">{{ $contact->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- Main Content -->


<!-- FOOTER -->

<footer id="footer" class="bg-gray-900 text-white py-8 mt-8">
    <div class="container mx-auto">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/3 px-4">
                <h3 class="text-lg font-semibold">Contact</h3>
                <div class="mt-4">
                    <p>0489 99 03 27<br>
                        <a href="mailto:katarina.gerlage@ifosup.wavre.be">katarina.gerlage@ifosup.wavre.be</a><br>
                        <br>
                        Viaductstraat 71, 3300 Tienen.
                    </p>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4">
                <h3 class="text-lg font-semibold">Retrouvez-moi...</h3>
                <div class="mt-4">
                    <div class="flex space-x-2">
                        <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" class="inline-block p-2 rounded-lg shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="w-6 h-6 text-white">
                                <path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"></path>
                                <path fill="#fff" d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z"></path>
                            </svg>
                        </a>

                        <a href="https://github.com/Katarina2605" target="_blank" rel="noopener noreferrer" class="inline-block p-2 rounded-lg shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" class="w-6 h-6 text-white">
                                <path fill="#b6c9d6" d="M38.5,20c0,10.299-8.391,18.5-18.5,18.5C9.892,38.5,1.5,30.299,1.5,20S9.701,1.5,20,1.5 S38.5,9.701,38.5,20z"></path>
                                <path fill="#fff" d="M33.171,19.24c0,2.306-1.191,5.51-3.148,7.102c-1.582,1.289-3.672,1.695-6.034,1.823 c0.888,0.539,1.479,1.515,1.479,2.629v7.636C23.979,38.8,22.429,39,20.832,39c-1.582,0-3.127-0.195-4.606-0.565v-5.017 c-0.642,0.2-1.484,0.318-2.568,0.262c-3.595-0.19-4.108-2.372-4.683-3.913c-0.58-1.541-2.378-1.736-2.121-2.372 c1.241-0.426,2.215-0.02,2.874,0.482c0.523,0.398,0.887,0.961,1.131,1.571c0.279,0.697,1.02,1.86,2.86,1.86 c1.299,0,2.069-0.303,2.511-0.601c0.026-1.089,0.621-2.033,1.494-2.552c-2.506-0.159-4.704-0.632-6.321-2.039 c-1.797-1.561-2.881-4.678-2.881-6.876c0-1.833,0.755-4.093,2.049-5.515c0.041-0.041,0.077-0.087,0.128-0.128 c-0.298-0.894-0.642-2.66,0.195-4.822c2.49-0.046,4.457,1.315,5.258,1.972c1.448-0.334,3.03-0.493,4.694-0.493 c1.705,0,3.333,0.149,4.806,0.493c0.801-0.657,2.773-2.018,5.258-1.967c0.873,2.249,0.467,4.072,0.164,4.925 C32.401,15.229,33.171,17.391,33.171,19.24z"></path>
                                <path fill="#788b9c" d="M20,39C9.523,39,1,30.477,1,20C1,9.346,9.346,1,20,1s19,8.346,19,19C39,30.477,30.477,39,20,39z M20,2C9.907,2,2,9.907,2,20c0,9.925,8.075,18,18,18s18-8.075,18-18C38,9.907,30.093,2,20,2z"></path>
                            </svg>
                        </a>

                        <a href="https://www.google.be/?hl=fr" target="_blank" rel="noopener noreferrer" class="inline-block p-2 rounded-lg shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="w-6 h-6 text-white">
                                <path fill="#fbc02d" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12	s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20	s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path>
                                <path fill="#e53935" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039	l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path>
                                <path fill="#4caf50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36	c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path>
                                <path fill="#1565c0" d="M43.611,20.083L43.595,20L42,20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571	c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                            </svg>
                        </a>

                        <a href="https://www.whatsapp.com/?lang=fr_FR" target="_blank" rel="noopener noreferrer" class="inline-block p-2 rounded-lg shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="w-6 h-6">
                                <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path>
                                <path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path>
                                <path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path>
                                <path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path>
                                <path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
                            </svg>
                        </a>


                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4">
                <h3 class="text-lg font-semibold">Quelques informations</h3>
                <div class="mt-4">
                    <p>Ce site web a été créé bénévolement dans le but de faciliter vos démarches en regroupant diverses informations essentielles, y compris la liste des refuges.</p>
                    <p>Le plagiat du contenu du site, que ce soit partiel ou total, est strictement interdit.</p>
                </div>
            </div>
        </div>
        <div class="mt-8 border-t border-gray-700 pt-8">
            <div class="flex flex-wrap justify-between">
                <div class="w-full md:w-1/2">
                    <p class="text-sm">
                        <a href="mentions" class="hover:underline">Mentions légales</a> |
                        <a href="credits" class="hover:underline">Crédits</a> |
                        <b><a href="login" class="hover:underline">Se connecter</a></b>
                    </p>
                </div>
                <div class="w-full md:w-1/2 text-right">
                    <p class="text-sm">
                        Copyright &copy; 2024, Katarina. Template créé par <a href="http://gettemplate.com/" class="text-blue-500 hover:underline" rel="designer">gettemplate</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenuButton.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden');
        });
    });
</script>
</body>
</html>
