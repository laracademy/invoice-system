@extends('layout.auth')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="card">
                    <div class="header">
                        <h4 class="title">
                            Login to the Invoice System
                        </h4>
                    </div>

                    <div class="content">
                        <form action="{{ route('auth.login') }}" method="POST">
                            {!! csrf_field() !!}

                            @include('layout.partials.messages')

                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>

                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <input type="submit" class="btn btn-fill btn-success btn-lg btn-block" value="Login">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection