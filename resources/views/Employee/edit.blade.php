@extends('layouts.main')

@section('container')

<div class="main-content">
    <div class="container-fluid">
        <section>
            <div class="py-2 mb-4">
                <h1 class="">{{ __('Edit Employee') }}</h1>
                <!-- Breadcrumb -->
                <nav class="d-flex">
                    <h6 class="mb-0">
                        <a href="" class="text-reset">{{ __('Home') }}</a>
                        <span>/</span>
                        <a href="{{ route('employee-backend.index') }}" class="text-reset">{{ __('Employee') }}</a>
                        <span>/</span>
                        <a href="" class="text-reset text-muted">
                            <u>{{ __('Edit Employee') }}</u>
                        </a>
                    </h6>
                </nav>
                <!-- Breadcrumb -->
            </div>
            <div class="row">
                <div class="col-md-8">
                    <form
                        action="{{ route('employee-backend.update', $employee->id) }}"
                        enctype="multipart/form-data"
                        method="POST"
                    >
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header">
                                <a
                                    href="{{ route('employee-backend.index') }}"
                                    class="btn btn-secondary"
                                >
                                    <i class="fa fa-chevron-left"></i>
                                    <span>{{ __('Back') }}</span>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="name">
                                                {{ __('Name') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input
                                                id="name"
                                                name="name"
                                                type="text"
                                                placeholder="Contoh: John Doe"
                                                class="form-control"
                                                value="{{ old('name', $employee->name) }}"
                                            />
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="form-label" for="gender">
                                                {{ __('Gender') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select
                                                id="gender"
                                                name="gender"
                                                class="form-control"
                                            >
                                                <option value="Male" {{ old('gender', $employee->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                                                <option value="Female" {{ old('gender', $employee->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                                            </select>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="form-label" for="day_of_birth">
                                                {{ __('Date of Birth') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input
                                                id="day_of_birth"
                                                name="day_of_birth"
                                                type="date"
                                                class="form-control"
                                                value="{{ old('day_of_birth', $employee->day_of_birth) }}"
                                            />
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="form-label" for="place_of_birth">
                                                {{ __('Place of Birth') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input
                                                id="place_of_birth"
                                                name="place_of_birth"
                                                type="text"
                                                placeholder="Contoh: Jakarta"
                                                class="form-control"
                                                value="{{ old('place_of_birth', $employee->place_of_birth) }}"
                                            />
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="form-label" for="address">
                                                {{ __('Address') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input
                                                id="address"
                                                name="address"
                                                type="text"
                                                placeholder="Contoh: Jl. Merdeka No. 1"
                                                class="form-control"
                                                value="{{ old('address', $employee->address) }}"
                                            />
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="form-label" for="status">
                                                {{ __('Status') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input
                                                id="status"
                                                name="status"
                                                type="text"
                                                placeholder="Contoh: Active"
                                                class="form-control"
                                                value="{{ old('status', $employee->status) }}"
                                            />
                                        </div>

                                        <div class="form-group mb-3">
                                            <label class="form-label" for="entry_date">
                                                {{ __('Entry Date') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input
                                                id="entry_date"
                                                name="entry_date"
                                                type="date"
                                                class="form-control"
                                                value="{{ old('entry_date', $employee->entry_date) }}"
                                            />
                                        </div>

                                        <!-- Office Selection -->
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="office_id">
                                                {{ __('Office') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select
                                                id="office_id"
                                                name="office_id"
                                                class="form-control"
                                            >
                                                @foreach($offices as $office)
                                                    <option value="{{ $office->id }}" {{ old('office_id', $employee->office_id) == $office->id ? 'selected' : '' }}>
                                                        {{ $office->office_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('office_id')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <!-- End Office Selection -->

                                        
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">{{ __('Update') }} </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection
