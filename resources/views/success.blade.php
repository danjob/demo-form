@extends('layouts.app')

@section('title', 'Success')


@section('content')

    <div class="bg-white">
        <div class="px-6 py-24 sm:px-6 sm:py-32 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">

                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    Success. 👍<br>
                    User created.
                </h2>

                <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-600">
                    This site will close automatically in 5 seconds.
                </p>

                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="/" class="text-sm font-semibold leading-6 text-gray-900">
                        Don't want to wait? →
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = '/';
        }, 5000);
    </script>

@endsection
