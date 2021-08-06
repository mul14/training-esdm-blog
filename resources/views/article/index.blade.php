@extends('layout.master')

@section('content')
    <div class="grid grid-cols-3 gap-8">
        @foreach($articles as $article)
            <div class="border rounded">
                <a href="{{ route('article.show', ['article' => $article->id]) }}">
                    <img src="{{ $article->image }}" alt="" class="rounded-t">
                </a>
                <div class="p-4">
                    <h2 class="text-xl font-bold mb-4">
                        <a href="{{ route('article.show', ['article' => $article->id]) }}" class="hover:text-blue-500">
                            {{ $article->title }}
                        </a>
                    </h2>
                    <article>
                        {{ Str::limit($article->body, 100) }}
                    </article>
                </div>
            </div>
        @endforeach
    </div>
    <div class="py-10">
        {{ $articles->links() }}
    </div>
@endsection
