@extends('layouts.main')

@section('container')

<div class="main-content">
    <div class="container-fluid">
        <section>
            <div class="py-2 mb-4">
                <h1>Office</h1>
                <!-- Breadcrumb -->
                <nav class="d-flex">
                    <h6 class="mb-0">
                        <a href="{{ route('office.index') }}" class="text-reset">Home</a>
                        <span>/</span>
                        <a href="{{ route('office.index') }}" class="text-reset"><u>Office</u></a>
                    </h6>
                </nav>
                <!-- Breadcrumb -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('office.create') }}" class="btn btn-primary">
                                Add
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable-server" class="table table-hover table-striped nowrap" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Office Name</th>
                                            <th>Office Address</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($offices as $index => $office)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $office->office_name }}</td>
                                            <td>{{ $office->office_address }}</td>
                                            <td>
                                                <a href="{{ route('office.edit', $office->id) }}" class="btn btn-warning btn-sm">
                                                    Edit
                                                </a>
                                                <form action="{{ route('office.destroy', $office->id) }}" method="POST" style="display: inline;">
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
