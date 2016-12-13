@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    @if(Session::has('message'))
                        {!! Session::get('message') !!}
                    @endif
                    <div class="panel-heading" style="margin-left: 9%">Add New Post here</div>

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/addpost') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('post') ? ' has-error' : '' }}">

                                <div class="col-md-4 col-md-offset-1">
                                    <textarea name="post" id="" cols="67" rows="3" value="{{ old('post') }}"
                                              required></textarea>
                                    <h5>or Add Image</h5>

                                    <div style="margin-top: 5px; margin-bottom: 8px">
                                        <input type="file" name="image" accept="image/*">
                                    </div>

                                    @if ($errors->has('post'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('post') }}</strong>
                                    </span>
                                    @endif

                                    @if ($errors->has('image'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                    @endif

                                    <button type="submit" class="btn btn-primary">
                                        Post
                                    </button>

                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        @foreach($feeds as $value)
            <div class="col-md-6 col-md-offset-3 well well-sm">
                <div class="" style="margin-left:11%; margin-right:11%">
                    <h4><b>{{ Auth::user()->first_name }}</b></h4>
                    {{ ($value->created_at->format('M jS ')) }}
                    <br>
                    {{ $value->post }} <br>
                    @if($value->image)
                    <img src="{{ $value->getImage(150,120) }}" />
                   {{--{{ $value->image}}--}}
                    @endif


                </div>
            </div>
        @endforeach
    </div>
@endsection