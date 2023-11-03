@extends('layouts.app')

@section('title', 'Welcome to Demo')


@section('content')

    {{-- error handling --}}
    @if ($errors->any())
        <div class="rounded-md bg-red-50 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-red-800">There were {{ count($errors->all()) }} errors with your
                        submission</h3>
                    <div class="mt-2 text-sm text-red-700">
                        <ul role="list" class="list-disc space-y-1 pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="flex min-h-full">
        <div class="flex flex-1 flex-col justify-center px-4 py-12 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-96">

                {{-- top --}}
                <div>
                    <img class="h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                        alt="Your Company">

                    <h2 class="mt-8 text-2xl font-bold leading-9 tracking-tight text-gray-900">Demo Form</h2>

                    <p class="mt-2 text-sm leading-6 text-gray-500">
                        Go to
                        <a href="{{ route('demo.index') }}" class="font-semibold text-indigo-600 hover:text-indigo-500">
                            Database
                        </a>
                    </p>
                </div>

                {{-- form --}}
                <div class="mt-10">
                    <div>
                        <form action="{{ route('demo.store') }}" method="POST" class="space-y-6">
                            @csrf

                            {{-- email --}}
                            <div>
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">
                                    Email address
                                </label>

                                <div class="mt-2">
                                    <input value="{{ old('email', 'test@email.com') }}" id="email" name="email"
                                        type="email" autocomplete="email" placeholder="Your email" required
                                        class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            {{-- name --}}
                            <div>
                                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">
                                    Name
                                </label>

                                <div class="mt-2">
                                    <input value="{{ old('name', 'John Doe') }}" id="name" name="name"
                                        type="text" autocomplete="current-name" placeholder="Your name" required
                                        class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            {{-- checkbox --}}
                            <div>
                                <div class="relative flex items-start">
                                    <div class="flex h-6 items-center">
                                        <input id="tos" aria-describedby="tos-description" name="tos"
                                            type="checkbox"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    </div>
                                    <div class="ml-3 text-sm leading-6">
                                        <label for="tos" class="font-medium text-gray-900">TOS</label>
                                        <p id="tos-description" class="text-gray-500">Confirm terms of service of demo
                                            app.</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <button type="submit"
                                    class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="relative hidden w-0 flex-1 lg:block">
            <img class="absolute inset-0 h-full w-full object-cover"
                src="https://images.unsplash.com/photo-1496917756835-20cb06e75b4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1908&q=80"
                alt="">
        </div>
    </div>

@endsection
