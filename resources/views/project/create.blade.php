@extends('layouts.main')

@section('container')

<div class="main-content">
    <div class="container-fluid">
        <section>
            <div class="py-2 mb-4">
                <h1 class="">Create Project</h1>
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
                        <div class="card-body">
                            <form action="{{ route('project.store') }}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label for="project_name" class="form-label">Project Name</label>
                                    <input type="text" name="project_name" id="project_name" class="form-control @error('project_name') is-invalid @enderror" value="{{ old('project_name') }}" maxlength="50" required>
                                    @error('project_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}" maxlength="100" required>
                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Save</button>
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
