@extends('layouts.app')

@section('title-block')
Update
@endsection

@section('content')
<h1 class="mt-4 mb-4">Update</h1>

    <form id="user-update-form">
        @csrf
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="text" name="email" placeholder="Enter email" id="email" value="{{$data->email}}" class="form-control">
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="name">Phone</label>
                    <input type="text" name="phone" placeholder="Enter phone" id="phone" value="{{$data->phone}}" class="form-control">
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col">
                <div class="form-group">
                    <label for="first-name">First Name</label>
                    <input type="text" name="first-name" placeholder="Enter first name" id="first-name" value="{{$data->first_name}}" class="form-control">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="last-name">Last Name</label>
                    <input type="text" name="last-name" placeholder="Enter last name" id="last-name" value="{{$data->last_name}}" class="form-control">
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col">
                <div class="form-group">
                    <label for="company-name">Company Name</label>
                    <input type="text" name="company-name" placeholder="Enter company name" id="company-name" value="{{$data->company_name}}" class="form-control">
                </div>
            </div>

            <div class="col mt-4">
                <button type="submit" class="btn btn-success">update</button>
            </div>
        </div>

    </form>

    <script src="{{ URL::asset('/js/userUpdate.js') }}"></script>

    @endsection




