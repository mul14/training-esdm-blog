@extends('layout.master')

@section('content')

    <div class="mx-auto w-2/5 px-10 border py-10 bg-gray-100 rounded">

        <form method="post" action="/register" enctype="multipart/form-data">
            @csrf

            <h1 class="text-xl font-bold mb-10">Register</h1>

            <div class="mb-4">
                <div class="flex justify-between">
                    <label for="">Name</label>
                    <div class="text-red-500">{{ $errors->first('name') }}</div>
                </div>
                <input type="text" id="name" name="name" value="{{ old('name') }}"
                       class="border border-gray-500 rounded px-4 py-2 w-full">
            </div>
            <div class="mb-4">
                <div class="flex justify-between">
                    <label for="email">Email</label>
                    <div class="text-red-500">{{ $errors->first('email') }}</div>
                </div>
                <input type="text" id="email" name="email" value="{{ old('email') }}"
                       class="border border-gray-500 rounded px-4 py-2 w-full">
            </div>
            <div class="mb-4">
                <div class="flex justify-between">
                    <label for="password">Password</label>
                    <div class="text-red-500">{{ $errors->first('password') }}</div>
                </div>
                <input type="password" id="password" name="password" class="border border-gray-500 rounded px-4 py-2 w-full">
            </div>

            <button class="px-10 py-2 rounded text-white bg-blue-400">Register</button>

        </form>

    </div>

@endsection
