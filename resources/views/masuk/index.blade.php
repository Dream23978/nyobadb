<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-50">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    @vite('resources/css/app.css')
    <title>Login</title>
</head>
<body class="h-full">

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="text-center text-3xl font-bold tracking-tight text-gray-900">
            Hai, Login Dulu Yuk
        </h2>
        <p class="mt-2 text-center text-sm text-gray-600">
            Silakan masukkan username dan password Anda
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-6 shadow rounded-lg sm:px-10">
            @if ($errors->any())
                <div class="mb-4 rounded bg-red-100 border border-red-400 text-red-700 px-4 py-3">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="space-y-6" action="{{ route('logix.login') }}" method="POST">
                @csrf

                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <div class="mt-1">
                        <input type="text" name="username" id="username" required
                               class="block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm placeholder-gray-400 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="mt-1">
                        <input type="password" name="password" id="password" autocomplete="current-password" required
                               class="block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm placeholder-gray-400 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                    </div>
                </div>

                <div>
                    <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md bg-indigo-600 text-white text-sm font-medium hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        Sign in
                    </button>
                </div>
            </form>

            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Daftar atau lupa password?
                </p>
                <a href="#" class="mt-1 inline-block text-sm font-semibold text-indigo-600 hover:text-indigo-500">
                    Hubungi Admin Program Studi Anda
                </a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
