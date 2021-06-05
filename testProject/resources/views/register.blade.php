@extends('layouts.app')

@section('title-block')
    Register
@endsection

@section('content')
    <h1>Register</h1>

    <form action="{{ route('user-form')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Email*</label>
            <input type="text" name="email" placeholder="Enter email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Phone</label>
            <input type="text" name="phone" placeholder="Enter phone" id="phone" class="form-control">
        </div>
        <div class="form-group">
            <label for="first-name">First Name*</label>
            <input type="text" name="first-name" placeholder="Enter first name" id="first-name" class="form-control">
        </div>
        <div class="form-group">
            <label for="first-name">Last Name*</label>
            <input type="text" name="last-name" placeholder="Enter last name" id="last-name" class="form-control">
        </div>
        <div class="form-group">
            <label for="first-name">Company Name</label>
            <input type="text" name="company-name" placeholder="Enter company name" id="company name" class="form-control">
        </div>
        <div class="form-group">
            <label for="first-name">Password*</label>
            <input type="password" name="password" placeholder="Enter password" id="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="first-name">Confirm Password*</label>
            <input type="password" name="confirm-password" placeholder="Confirm password" id="confirm-password" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">register</button>

@endsection



