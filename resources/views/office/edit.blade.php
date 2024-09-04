@extends('layouts.main')

@section('container')

<div class="main-content">
    <div class="container-fluid">
        <section>
            <div class="py-2 mb-4">
                <h1 class="">Edit Office</h1>
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
                        <div class="card-body">
                            <form action="{{ route('office.update', $office->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="office_name" class="form-label">Office Name</label>
                                    <input type="text" name="office_name" id="office_name" class="form-control @error('office_name') is-invalid @enderror" value="{{ old('office_name', $office->office_name) }}" maxlength="50" required>
                                    @error('office_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="office_address" class="form-label">Office Address</label>
                                    <input type="text" name="office_address" id="office_address" class="form-control @error('office_address') is-invalid @enderror" value="{{ old('office_address', $office->office_address) }}" maxlength="100" required>
                                    @error('office_address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('office.index') }}" class="btn btn-secondary">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection
