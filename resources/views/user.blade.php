@extends('layout.master')

@section('content')
    <div class="container mx-auto px-32">
    <ol class="list-decimal list-inside">
    @foreach($users as $user)

        <li>
            <a href="{{ route('user.show', ['id' => $user->id]) }}">
                {{ $user->name }} ({{ $user->email }})
            </a>
        </li>

    @endforeach
</ol>

{{ $users->links() }}
</div>
@endsection
