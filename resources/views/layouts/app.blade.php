<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel | CNP Validator</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200">
<div class="min-h-screen min-w-screen flex items-center justify-center bg-yellow-100">
    <div class="flex flex-col shadow-xl">
        <div
            class="py-6 px-14 bg-gradient-to-tr from-pink-500 to-pink-300 rounded-tl-2xl rounded-tr-2xl text-center space-y-8">
            <h2 class="text-white text-xs uppercase">CNP Validator</h2>
            <h4 class="text-white text-center font-bold text-xl">
                @if (Session::has('success'))
                    <ul>
                        <li>{!! Session::get('success') !!}</li>
                    </ul>
                @else
                    <ul>
                        <li>{!! Session::get('error') !!}</li>
                    </ul>
                @endif
            </h4>
        </div>
        <div class="flex flex-col py-6 px-8 space-y-5 bg-white">
            <form class="m-4 flex" method="post" action="{{route('post-cnp')}}">
                @csrf
                <input type="text" name="cnp"
                       class="rounded-l-lg p-4 border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white"
                       placeholder="Validate CNP here..."/>
                <button type="submit"
                        class="px-8 rounded-r-lg bg-yellow-400  text-gray-800 font-bold p-4 uppercase border-yellow-500 border-t border-b border-r">
                    Submit
                </button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
