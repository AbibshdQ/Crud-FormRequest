@extends('layouts.main')

@section('container')

<div class="main-content">
    <div class="container-fluid">
        <section>
            <div class="py-2 mb-4">
                <h1 class="">{{ ('Employee') }}</h1>
                <!-- Breadcrumb -->
                <nav class="d-flex">
                    <h6 class="mb-0">
                        <a href="" class="text-reset">{{ ('Home') }}</a>
                        <span>/</span>
                        <a href="" class="text-reset"><u>{{ ('Employee') }}</u></a>
                    </h6>
                </nav>
                <!-- Breadcrumb -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('employee-backend.create') }}" class="btn btn-primary">
                                {{ ('Add') }}
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable-server" class="table table-hover table-striped nowrap" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>{{ ('No') }}</th>
                                            <th>{{ ('Name') }}</th>
                                            <th>{{ ('Gender') }}</th>
                                            <th>{{ ('Date of Birth') }}</th>
                                            <th>{{ ('Place of Birth') }}</th>
                                            <th>{{ ('Address') }}</th>
                                            <th>{{ ('Status') }}</th>
                                            <th>{{ ('Entry Date') }}</th>
                                            <th>{{ ('Office Name') }}</th> <!-- Tambahkan kolom Office Name -->
                                            <th>{{ ('Actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($employees as $index => $employee)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $employee->name }}</td>
                                            <td>{{ $employee->gender }}</td>
                                            <td>{{ $employee->day_of_birth }}</td>
                                            <td>{{ $employee->place_of_birth }}</td>
                                            <td>{{ $employee->address }}</td>
                                            <td>{{ $employee->status }}</td>
                                            <td>{{ $employee->entry_date }}</td>
                                            <td>{{ $employee->office->office_name }}</td> <!-- Menampilkan Office Name -->
                                            <td>
                                                <a href="{{ route('employee-backend.edit', $employee->id) }}" class="btn btn-warning btn-sm">
                                                    Edit
                                                </a>
                                                <form action="{{ route('employee-backend.destroy', $employee->id) }}" method="POST" style="display: inline;">
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
