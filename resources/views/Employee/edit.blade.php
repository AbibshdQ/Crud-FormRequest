@extends('layouts.main')

@section('container')
    <div class="d-flex align-items-center justify-content-center min-vh-100">
        <div class="col-lg-6 mb-5 ">
            <div
                class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2 text-center">Edit employee</h1>
            </div>
            <form method="post" action="/employee-backend/{{ $employee->id }}">
                @method('PUT')
                @csrf

                <div class="mb-2">
                    <label for="name" class="form-label">Nama employee</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ $employee->name, old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="gender" class="form-label">Jenis Kelamin</label>
                    <select class="form-control form-control-user @error('gender') is-invalid @enderror" name="gender">

                        <option value="Laki Laki" selected>Laki Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    @error('gender')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- <div class="form-group mb-2">
            <label>Jenis Kelamin</label>
            @php
                $jenis_kelamins = ['Laki-Laki', 'Perempuan'];
            @endphp
            <select class="form-control form-control-user col-3" name="jenis_kelamin">
                @foreach ($jenis_kelamins as $jenis_kelamin)
                    <option value="{{ $jenis_kelamin }}" @selected($employees->jenis_kelamin == $jenis_kelamin)>{{ $jenis_kelamin }}</option>
                @endforeach
            </select>
        </div> --}}

                <div class="mb-2">
                    <label for="day_of_birth" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control @error('day_of_birth') is-invalid @enderror" name="day_of_birth"
                        value="{{ $employee->day_of_birth, old('day_of_birth') }}">
                    @error('day_of_birth')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="place_of_birth" class="form-label">Tempat Lahir</label>
                    <textarea class="form-control @error('place_of_birth') is-invalid @enderror" name="place_of_birth">{{ $employee->place_of_birth, old('place_of_birth') }}</textarea>
                    @error('place_of_birth')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="address" class="form-label">address</label>
                    <textarea class="form-control @error('address') is-invalid @enderror" name="address">{{ $employee->address, old('address') }}</textarea>
                    @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- <div class="mb-2">
            <label for="status" class="form-label">Status employee</label>
            <textarea class="form-control @error('status') is-invalid @enderror" name="status">{{ $employees->status, old('status') }}</textarea>
            @error('status')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div> --}}

                <div class="mb-2">
                    <label for="status" class="form-label">Status employee</label>
                    <select class="form-control form-control-user @error('status') is-invalid @enderror" name="status">
                        <option value="Aktif" selected>Aktif</option>
                        <option value="Pensiun">Pensiun</option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="entry_date" class="form-label">Tanggal Masuk</label>
                    <input type="date" class="form-control @error('entry_date') is-invalid @enderror" name="entry_date"
                        value="{{ $employee->entry_date, old('entry_date') }}">
                    @error('entry_date')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <button type="submit" class="btn btn-danger btn-buy-now">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
