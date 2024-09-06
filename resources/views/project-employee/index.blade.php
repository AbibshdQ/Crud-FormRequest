@extends('layouts.main')

@section('container')

<div class="main-content">
    <div class="container-fluid">
        <section>
            <div class="py-2 mb-4">
                <h1>Data Employee Project</h1>
                <nav class="d-flex">
                    <h6 class="mb-0">
                        <a href="{{ route('project.index') }}" class="text-reset">Home</a>
                        <span>/</span>
                        <a href="{{ route('project-employee.index') }}" class="text-reset"><u>Employee Projects</u></a>
                    </h6>
                </nav>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('project-employee.create') }}" class="btn btn-primary">
                                Add Employee to Project
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable-server" class="table table-hover table-striped nowrap" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Employee Name</th>
                                            <th>Project Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($employeeProjects as $index => $employeeProject)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $employeeProject->employee->name }}</td>
                                                <td>{{ $employeeProject->project->project_name }}</td>
                                                <td>
                                                    <form action="{{ route('project-employee.destroy', $employeeProject->id) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center">No data available</td>
                                            </tr>
                                        @endforelse
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
