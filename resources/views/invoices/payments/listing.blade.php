@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <div class="card">
                <div class="header">
                    <h4 class="title">Listing payments for {{ $invoice->project->name }}</h4>
                    <p class="category"></p>
                </div>

                <div class="content">
                    @include('layout.partials.messages')

                    <table class="table table-border table-hover table-striped">
                        <thead>
                            <tr>
                                <th width="30%">
                                    Amount
                                </th>
                                <th width="30%">
                                    Created At
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                            @foreach($invoice->payments as $payment)
                                <tr>
                                    <td>
                                        <h5>
                                            <span class="label label-success">
                                                ${{ $payment->getCurrencyFormat($payment->amount) }}
                                            </span>
                                        </h5>
                                    </td>
                                    <td>
                                        <h5>
                                            {{ $payment->created_at->format('F d, Y') }}
                                        </h5>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-justified">
                                            <a href="{{ route('invoice.payments.destroy', $payment) }}" class="btn btn-danger"><i class="fa fa-trash"></i> Remove Payment</a>
                                            <a href="{{ route('invoice.payments.edit', $payment) }}" class="btn btn-info"><i class="fa fa-pencil"></i> Edit Payment</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection