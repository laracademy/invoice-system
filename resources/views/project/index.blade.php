@extends('layout.app')

@section('content')

    <div class="row">
        <div class="col-md-12">

            @include('layout.partials.messages')

            <div class="card">
                <div class="header">
                    <h4 class="title">
                        Projects
                        <div class="pull-right">
                            <a href="{{ route('project.create') }}" class="btn btn-info btn-fill"><i class="ti-plus"></i> Add Project</a>
                        </div>
                    </h4>
                    <p class="category">All of your projects are shown below in the list</p>
                </div>

                <div class="content table-reposive table-full-width">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Client
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $project)
                                <tr>
                                    <td>
                                        {{ $project->name }}
                                    </td>
                                    <td>
                                        {{ $project->client->name }}
                                    </td>
                                    <td class="td-actions text-right">
                                        <a href="{{ route('project.edit', $project) }}" class="btn btn-success btn-simple btn-sm">
                                            <i class="ti-pencil-alt"></i> Edit
                                        </a>
                                        <a href="{{ route('project.destroy', $project) }}" onclick="return confirm('Are you sure?');" class="btn btn-danger btn-simple btn-sm">
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