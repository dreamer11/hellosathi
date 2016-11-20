
@extends('layouts.main')

@section('title','| Login')


@section('content')
    <div class="row" style=" margin: 5% 0 auto">
        <div class="col-lg-6">
            <div class="well well-sm">
                <form action="verify" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info">Login</button>
                    </div>
                </form>
            </div>

            <div class="well well-sm">
                <span>Or New User?<a href="signup">Sign Up here</a></span>
            </div>
        </div>
    </div>
@endsection