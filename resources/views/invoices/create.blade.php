@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <div class="card">
                <div class="header">
                    <h4 class="title">Creating Invoice</h4>
                    <p class="category">Please fill in the fields below</p>
                </div>

                <div class="content">

                    @include('layout.partials.messages')

                    <form action="{{ route('invoice.store') }}" method="POST" autocomplete="off">
                        {!! csrf_field() !!}

                        @include('invoices.forms.invoice', $invoice)

                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block btn-lg" value="Create Invoice">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection