@extends('layout.master')

@section('content')
    <form action="/admin/article" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <div class="flex justify-between">
                <label for="title">Title</label>
                <div class="text-red-500">{{ $errors->first('title') }}</div>
            </div>
            <input class="border border-gray-500 rounded px-4 py-2 w-full" type="text" id="title" name="title"
                   value="{{ old('title') }}">
        </div>

        <div class="mb-4">
            <div class="flex justify-between">
                <label for="image">Image</label>
                <div class="text-red-500">{{ $errors->first('image') }}</div>
            </div>
            <input class="border border-gray-500 rounded px-4 py-2 w-full" type="file" id="image" name="image"
                   value="{{ old('image') }}">
        </div>

        <div class="mb-4">
            <div class="flex justify-between">
                <label for="title">Body</label>
                <div class="text-red-500">{{ $errors->first('title') }}</div>
            </div>
            <textarea name="body" id="" cols="30" rows="10"
                      class="border border-gray-500 rounded px-4 py-2 w-full"
            >{{ old('body') }}</textarea>
        </div>

        <div>

        </div>

        <button class="px-10 py-2 rounded text-white bg-blue-400">Save</button>

    </form>
@endsection
