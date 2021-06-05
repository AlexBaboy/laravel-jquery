@extends('layouts.app')

@section('title-block')
    All users
@endsection

@section('content')
    <h1>All users</h1>
    @foreach($data as $user)
        <div class="alert alert-info">
            <h3>{{ $user->first_name }} {{ $user->last_name }}</h3>
            <p>{{ $user->company_name }}</p>
            <p>{{ $user->phone }}</p>
            <p>{{ $user->created_at }}</p>
        </div>
    @endforeach
@endsection
