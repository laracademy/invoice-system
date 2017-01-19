@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <div class="card">
                <div class="header">
                    <h4 class="title">Add New Payment</h4>
                    <p class="category">Fill in the fields to add a new payment</p>
                </div>

                <div class="content">

                    @include('layout.partials.messages')

                    <form action="{{ route('invoice.payments.store', $invoice) }}" method="POST" autocomplete="off">
                        {!! csrf_field() !!}

                        @include('invoices.forms.payment', $payment)

                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block btn-lg" value="Add Payment">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection