@extends('layout.app')

@section('content')

    <div class="row">
        <div class="col-md-12">

            @include('layout.partials.messages')

            <div class="card">
                <div class="header">
                    <h4 class="title">
                        Clients
                        <div class="pull-right">
                            <a href="{{ route('client.create') }}" class="btn btn-info btn-fill"><i class="ti-plus"></i> Add Client</a>
                        </div>
                    </h4>
                    <p class="category">All of your current and past clients are shown below in the list</p>
                </div>

                <div class="content table-reposive table-full-width">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>
                                    Name
                                </th>
                                <th class="text-center">
                                    Overdue
                                </th>
                                <th class="text-center">
                                    Outstanding
                                </th>
                                <th class="text-center">
                                    Paid
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clients as $client)
                                <tr>
                                    <td>
                                        {{ $client->name }}
                                    </td>
                                    <td class="text-center">
                                        <h5>
                                            <span class="label label-default">0</span>
                                        </h5>
                                    </td>
                                    <td class="text-center">
                                        <h5>
                                            <span class="label label-default">0</span>
                                        </h5>
                                    </td>
                                    <td class="text-center">
                                        <h5>
                                            <span class="label label-default">0</span>
                                        </h5>
                                    </td>
                                    <td class="td-actions text-right">
                                        <a href="{{ route('client.edit', $client) }}" class="btn btn-success btn-simple btn-sm">
                                            <i class="ti-pencil-alt"></i> Edit
                                        </a>
                                        <a href="{{ route('client.destroy', $client) }}" onclick="return confirm('Are you sure?');" class="btn btn-danger btn-simple btn-sm">
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