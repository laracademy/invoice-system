@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <div class="card">
                <div class="header">
                    <h4 class="title">Editing Client: {{ $client->name }}</h4>
                    <p class="category">Fill in the fields to edit the client</p>
                </div>

                <div class="content">

                    @include('layout.partials.messages')

                    <form action="{{ route('client.update', $client) }}" method="POST">
                        {!! csrf_field() !!}
                        <input type="hidden" name="id" value="{{ $client->id }}">

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name', $client->name) }}">
                        </div>

                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" class="form-control" name="email_address" value="{{ old('email_address', $client->email_address) }}">
                        </div>

                        <div class="form-group">
                            <label>Website URL</label>
                            <input type="text" class="form-control" name="website_url" value="{{ old('website_url', $client->website_url) }}">
                        </div>

                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" name="phone_number" value="{{ old('phone_number', $client->phone_number) }}">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block btn-lg" value="Update Client">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection