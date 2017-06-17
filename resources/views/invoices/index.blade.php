@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-md-12">

            @include('layout.partials.messages')

            <div class="card">
                <div class="header">
                    <h4 class="title">
                        Invoices
                        <div class="pull-right">
                            <a href="{{ route('invoice.create') }}" class="btn btn-info btn-fill"><i class="ti-plus"></i> Add Invoice</a>
                        </div>
                    </h4>
                    <p class="category">All of your invoices are shown below in the list</p>
                </div>

                <div class="content table-reposive table-full-width">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>
                                    Project
                                </th>
                                <th>
                                    Due
                                </th>
                                <th>
                                    Paid
                                </th>
                                <th>
                                    Total
                                </th>
                                <th>
                                    Owing
                                </th>
                                <th>
                                    Last Payment
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($invoices as $invoice)
                                <tr>
                                    <td>
                                        {{ $invoice->project->name }}
                                    </td>
                                    <td>
                                        @if($invoice->due_at->timestamp > 0)
                                            {{ $invoice->due_at->format('F d, Y') }}
                                        @else
                                            No Due Date
                                        @endif
                                    </td>
                                    <td>
                                        @if($invoice->isPaid())
                                            <i class="fa fa-check text-success"></i>
                                        @else
                                            <i class="fa fa-times text-danger"></i>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('invoice.payments.listing', $invoice) }}">
                                            ${{ $invoice->getCurrencyFormat($invoice->amount) }}
                                        </a>
                                    </td>
                                    <td>
                                        ${{ $invoice->getCurrencyFormat($invoice->amountOwing()) }}
                                    </td>
                                    <td>
                                        @if($invoice->payments()->count() > 0)
                                            {{ $invoice->payments()->orderBy('created_at', 'desc')->first()->created_at->format('F d, Y') }}
                                        @else
                                            No Payment Recorded
                                        @endif
                                    </td>
                                    <td class="td-actions text-right">
                                        <a href="{{ route('invoice.payments.create', $invoice) }}" class="btn btn-success btn-simple btn-sm">
                                            <i class="ti-plus"></i> Payment
                                        </a>
                                        <a href="{{ route('project.edit', $invoice) }}" class="btn btn-success btn-simple btn-sm">
                                            <i class="ti-pencil-alt"></i> Edit
                                        </a>
                                        <a href="{{ route('project.destroy', $invoice) }}" onclick="return confirm('Are you sure?');" class="btn btn-danger btn-simple btn-sm">
                                            <i class="ti-close"></i> Remove
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection