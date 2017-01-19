@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <div class="card">
                <div class="header">
                    <h4 class="title">Editing Payment</h4>
                    <p class="category">Please correct any changes on the payment and click save</p>
                </div>

                <div class="content">

                    @include('layout.partials.messages')

                    <form action="{{ route('invoice.payments.update') }}" method="POST" autocomplete="off">
                        {!! csrf_field() !!}
                        <input type="hidden" name="id" value="{{ $payment->id }}">

                        @include('invoices.forms.payment', $payment)

                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-block btn-lg" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection