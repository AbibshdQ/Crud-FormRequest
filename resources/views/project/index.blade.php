@extends('layouts.main')

@section('container')

<div class="main-content">
    <div class="container-fluid">
        <section>
            <div class="py-2 mb-4">
                <h1>Project</h1>
                <!-- Breadcrumb -->
                <nav class="d-flex">
                    <h6 class="mb-0">
                        <a href="{{ route('project.index') }}" class="text-reset">Home</a>
                        <span>/</span>
                        <a href="{{ route('project.index') }}" class="text-reset"><u>Project</u></a>
                    </h6>
                </nav>
                <!-- Breadcrumb -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('project.create') }}" class="btn btn-primary">
                                Add Project
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable-server" class="table table-hover table-striped nowrap" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Project Name</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($projects as $index => $project)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $project->project_name }}</td>
                                            <td>{{ Str::limit($project->description, 50) }}</td>  
                                            <td>
                                                <a href="{{ route('project.edit', $project->id) }}" class="btn btn-warning btn-sm">
                                                    Edit
                                                </a>
                                                <form action="{{ route('project.destroy', $project->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection
