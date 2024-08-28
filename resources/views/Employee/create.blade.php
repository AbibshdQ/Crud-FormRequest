@extends('layouts.main')

@section('container')


<div class="d-flex align-items-center justify-content-center min-vh-100">
<div class="col-lg-6 mb-5 ">
    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2 text-center">Entri Pegawai</h1>
        </div>
    <form method="post" action="{{ route('employee-backend.store') }}">
        @csrf

        <div class="mb-2">
            <label for="name" class="form-label">Nama Pegawai</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                value="{{ old('name') }}">
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="gender" class="form-label">Jenis Kelamin</label>
            <select class="form-control @error('gender') is-invalid @enderror" name="gender">
                <option value="Laki Laki" selected>Laki Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            @error('gender')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="day_of_birth" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control @error('day_of_birth') is-invalid @enderror" name="day_of_birth"
                value="{{ old('day_of_birth') }}">
            @error('day_of_birth')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="place_of_birth" class="form-label">Tempat Lahir</label>
            <textarea class="form-control @error('place_of_birth') is-invalid @enderror" name="place_of_birth">{{ old('place_of_birth') }}</textarea>
            @error('place_of_birth')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="adress" class="form-label">adress</label>
            <textarea class="form-control @error('adress') is-invalid @enderror" name="adress">{{ old('adress') }}</textarea>
            @error('adress')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="status" class="form-label">Status Pegawai</label>
            <select class="form-control form-control-user @error('status') is-invalid @enderror" name="status">
                <option value="Aktif" selected>Aktif</option>
                <option value="Pensiu">Pensiun</option>
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
                value="{{ old('entry_date') }}">
            @error('entry_date')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-danger btn-buy-now ">Submit</button>
        </div>
    </form>
</div>
</div>
@endsection
