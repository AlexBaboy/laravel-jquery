@extends('layouts.app')

@section('title-block')
Update
@endsection

@section('content')
<h1>Update</h1>

<div>
    <form id="user-form">
        @csrf
        <div class="form-group">
            <label for="name">Email</label>
            <input type="text" name="email" placeholder="Enter email" id="email" value="{{$data->email}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Phone</label>
            <input type="text" name="phone" placeholder="Enter phone" id="phone" value="{{$data->phone}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="first-name">First Name</label>
            <input type="text" name="first-name" placeholder="Enter first name" id="first-name" value="{{$data->first_name}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="last-name">Last Name</label>
            <input type="text" name="last-name" placeholder="Enter last name" id="last-name" value="{{$data->last_name}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="company-name">Company Name</label>
            <input type="text" name="company-name" placeholder="Enter company name" id="company-name" value="{{$data->company_name}}" class="form-control">
        </div>

        <button ty class="btn btn-success">update</button>
    </form>
</div>



    <script src="{{ URL::asset('/js/userUpdate.js') }}"></script>

    @endsection




