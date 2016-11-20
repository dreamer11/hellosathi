@extends('layouts.main')

@section('title',' | Sign Up')


@section('content')

    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <h2>Signup Form</h2>
            <hr>
            <form action="{{ url('createUser') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control">
                    <span class="text-danger">{{ $errors->first('first_name') }}</span>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control">
                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
                <div class="form-group">
                    <label for="password">Password </label>
                    <input type="text" name="password" class="form-control">
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                </div>
                <div class="form-group">
                    <label for="password">Re-enter Password </label>
                    <input type="text" name="password_confirmation" class="form-control">
                </div>
                <div>
                    <button class="btn btn-info">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
