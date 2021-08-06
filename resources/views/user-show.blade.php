@extends('layout.master')

@section('content')
    {{ $user->id }}:
    {{ $user->name }} ({{ $user->email }})

    <img src="{{ url('/storage/' . $user->avatar) }}" alt="">

    <a href="{{ route('user.index') }}">Back to list</a>
@endsection
