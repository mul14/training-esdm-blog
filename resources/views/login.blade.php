@extends('layout.master')

@section('content')

    <div class="container w-1/3 mx-auto">

        <h1 class="text-2xl mb-10">Login page</h1>

        <form method="post" action="">
            @csrf

            <div class="mb-4">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Email"
                       value="{{ old('email') }}"
                       class="border border-gray-500 rounded px-4 py-2 w-full">
            </div>

            <div class="mb-4">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password"
                       class="border border-gray-500 rounded px-4 py-2 w-full">
            </div>

            <div class="flex justify-between items-center">
                <button class="px-10 py-2 rounded text-white bg-blue-400">Login</button>
                <a href="/register" class="px-10 py-2 rounded text-blue-400 border border-blue-400">Register</a>
            </div>
        </form>

    </div>

@endsection
