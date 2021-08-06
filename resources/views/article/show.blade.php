@extends('layout.master')

@section('content')
    <div class="w-2/3 mx-auto">
        <div class="border rounded p-6">
            <img src="{{ $article->image }}" alt="">
            <h2 class="text-xl font-bold my-4">
                {{ $article->title }}
            </h2>
            <article>
                {!! nl2br($article->body) !!}
            </article>
        </div>

        <div class="border rounded p-6 mt-10">
            <h3 class="text-xl mb-10">Comments</h3>
            @foreach($comments as $comment)
                <div>
                    <div class="flex mb-2 justify-between">
                        <div class="font-bold text-gray-700 flex">
                            <img src="https://gravatar.com/avatar/{{ md5($comment->email) }}?s=25" alt="" class="rounded mr-2">
                            {{ $comment->name }}
                        </div>
                        <div class="text-xs text-gray-400 cursor-default" title="{{ $comment->created_at->toDateTimeString() }}">
                            {{ $comment->created_at->diffForHumans() }}
                        </div>
                    </div>
                    <div class="text-sm text-gray-600">{{ $comment->comment }}</div>
                </div>
                <hr class="border-0 border-t my-10">
            @endforeach
            <div>
                <div class="font-bold text-xl mb-4">Add you comment here</div>

                <form action="/comment" method="post">
                    @csrf

                    <input type="hidden" name="article_id" value="{{ $article->id }}">

                    <div class="mb-4">
                        <div class="flex justify-between">
                            <label for="name">Name</label>
                            <div class="text-red-500">{{ $errors->first('name') }}</div>
                        </div>
                        <input class="border border-gray-500 rounded px-4 py-2 w-full" type="text" id="name" name="name" value="{{ old('name') }}">
                    </div>

                    <div class="mb-4">
                        <div class="flex justify-between">
                            <label for="email">Email</label>
                            <div class="text-red-500">{{ $errors->first('email') }}</div>
                        </div>
                        <input class="border border-gray-500 rounded px-4 py-2 w-full" type="email" id="email" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="mb-4">
                        <div class="flex justify-between">
                            <label for="comment">Message</label>
                            <div class="text-red-500">{{ $errors->first('comment') }}</div>
                        </div>
                        <textarea class="border border-gray-500 rounded px-4 py-2 w-full" name="comment" id="comment" cols="30" rows="10"></textarea>
                    </div>

                    <button class="px-10 py-2 rounded text-white bg-blue-400">Send</button>
                </form>
            </div>
        </div>
    </div>
@endsection
