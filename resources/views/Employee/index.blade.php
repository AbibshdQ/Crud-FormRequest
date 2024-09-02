@extends('layouts.main')
@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="d-flex flex-column align-items-center mt-3">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Pegawai</h1>

            <!-- Button Add -->
            <div class="mt-2 mb-2">
                <a href="{{ route('employee-backend.create') }}" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-600">
                        <i class="fas fa-plus-square"></i>
                    </span>
                    <span class="text">Add</span>
                </a>
            </div>

        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Pegawai</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama employee</th>
                                <th>Jenis Kelamin</th>
                                <th>Tgl Lahir</th>
                                <th>Tempat Lahir</th>
                                <th>Alamat</th>
                                <th>Status employee</th>
                                <th>Tgl Masuk</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->gender }}</td>
                                    <td>{{ $employee->day_of_birth }}</td>
                                    <td>{{ $employee->place_of_birth }}</td>
                                    <td>{{ $employee->adress }}</td>
                                    <td>{{ $employee->status }}</td>
                                    <td>{{ $employee->entry_date }}</td>
                                    <td class="text-center">
                                        <div class="d-flex">
                                            <a href="{{ route('employee-backend.edit', $employee->id) }}"
                                                class="btn btn-warning btn-circle">
                                                <i class="fas fa-exclamation-triangle"></i>
                                            </a>
                                            <form action="{{ route('employee-backend.destroy', $employee->id) }}"
                                                method="POST" class="ml-1">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-circle"
                                                    onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
