@extends('layouts.app')

@section('title-block')
    All users
@endsection

@section('content')
    <h1  class="my-4">All users</h1>
    @csrf
    @foreach($data as $user)
        <div class="alert alert-info">
            <h3>{{ $user->first_name }} {{ $user->last_name }}</h3>
            <p>{{ $user->company_name }}</p>
            <p>{{ $user->phone }}</p>
            <p>{{ $user->created_at }}</p>
            <p>
                <a href="{{ route('user-update', $user->id) }}">
                    <button class="btn btn-primary">update</button>
                </a>
                <span>
                    <button class="btn btn-danger" data-id="{{$user->id}}">remove</button>
                </span>
            </p>
        </div>
    @endforeach
<script src="{{ URL::asset('/js/userDelete.js') }}"></script>
@endsection

