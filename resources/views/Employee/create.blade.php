@extends('layouts.main')

@section('container')

<div class="main-content">
    <div class="container-fluid">
        <section>
            <div class="py-2 mb-4">
                <h1>Tambah Karyawan</h1>
                <!-- Breadcrumb -->
                <nav class="d-flex">
                    <h6 class="mb-0">
                        <a href="{{ route('employee.index') }}" class="text-reset">Beranda</a>
                        <span>/</span>
                        <a href="{{ route('employee.index') }}" class="text-reset">Karyawan</a>
                        <span>/</span>
                        <a href="{{ route('employee.create') }}" class="text-reset text-muted">
                            <u>Tambah Karyawan</u>
                        </a>
                    </h6>
                </nav>
                <!-- Breadcrumb -->
            </div>
            <div class="row">
                <div class="col-md-8">
                    <form action="{{ route('employee.store') }}" method="POST">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('employee.index') }}" class="btn btn-secondary">
                                    <i class="fa fa-chevron-left"></i>
                                    <span>Kembali</span>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="name">Nama Karyawan
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input
                                                id="name"
                                                name="name"
                                                type="text"
                                                class="form-control"
                                                value="{{ old('name') }}"
                                            />
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="form-label" for="gender">Jenis Kelamin
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select
                                                id="gender"
                                                name="gender"
                                                class="form-control"
                                            >
                                                <option value="">Pilih Jenis Kelamin</option>
                                                <option value="Laki-laki" {{ old('gender') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                                <option value="Perempuan" {{ old('gender') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                            </select>
                                            @error('gender')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="form-label" for="day_of_birth">Tanggal Lahir
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input
                                                id="day_of_birth"
                                                name="day_of_birth"
                                                type="date"
                                                class="form-control"
                                                value="{{ old('day_of_birth') }}"
                                            />
                                            @error('day_of_birth')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="form-label" for="place_of_birth">Tempat Lahir
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input
                                                id="place_of_birth"
                                                name="place_of_birth"
                                                type="text"
                                                class="form-control"
                                                value="{{ old('place_of_birth') }}"
                                            />
                                            @error('place_of_birth')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="form-label" for="address">Alamat
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input
                                                id="address"
                                                name="address"
                                                type="text"
                                                class="form-control"
                                                value="{{ old('address') }}"
                                            />
                                            @error('address')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="form-label" for="status">Status
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input
                                                id="status"
                                                name="status"
                                                type="text"
                                                placeholder="Contoh: Aktif"
                                                class="form-control"
                                                value="{{ old('status') }}"
                                            />
                                            @error('status')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="form-label" for="entry_date">Tanggal Masuk
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input
                                                id="entry_date"
                                                name="entry_date"
                                                type="date"
                                                class="form-control"
                                                value="{{ old('entry_date') }}"
                                            />
                                            @error('entry_date')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection
