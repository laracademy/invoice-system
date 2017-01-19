@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <div class="card">
                <div class="header">
                    <h4 class="title">Creating New Client</h4>
                    <p class="category">Fill in the fields to create a new client</p>
                </div>

                <div class="content">

                    @include('layout.partials.messages')

                    <form action="{{ route('client.store') }}" method="POST">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" class="form-control" name="email_address" value="{{ old('email_address') }}">
                        </div>

                        <div class="form-group">
                            <label>Website URL</label>
                            <input type="text" class="form-control" name="website_url" value="{{ old('website_url') }}">
                        </div>

                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block btn-lg" value="Create Client">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection