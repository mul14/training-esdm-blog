@extends('layout.master')

@section('content')

    <div class="flex justify-end mb-10">
        <a href="/admin/article/create" class="px-10 py-2 rounded text-white bg-blue-400">Create New Article</a>
    </div>

    <table class="w-full">
        <thead>
            <th class="border p-4">Title</th>
            <th class="border p-4">Created</th>
            <th class="border p-4">Modified</th>
            <th class="border p-4">Actions</th>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <td class="border p-4">
                    <a href="/admin/article/{{ $article->id }}/edit" class="text-blue-500">
                        {{ $article->title }}
                    </a>
                </td>
                <td class="border p-4">{{ $article->created_at }}</td>
                <td class="border p-4">{{ $article->updated_at }}</td>
                <td class="border p-4 flex gap-2 justify-center">
                    <a href="/admin/article/{{ $article->id }}/edit" class="px-2 py-1 rounded bg-blue-500 text-white text-xs">Edit</a>
                    <form method="post" action="/admin/article/{{ $article->id }}" onclick="return confirm('Hapus?')">
                        @csrf @method('delete')
                        <button class="px-2 py-1 border rounded border-red-500 text-red-500 text-xs">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div>
        {{ $articles->links() }}
    </div>

@endsection
