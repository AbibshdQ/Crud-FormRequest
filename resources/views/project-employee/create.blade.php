@extends('layouts.main')

@section('container')

<div class="main-content">
    <div class="container-fluid">
        <section>
            <div class="py-2 mb-4">
                <h1 class="">Assign Employee to Project</h1>
                <nav class="d-flex">
                    <h6 class="mb-0">
                        <a href="{{ route('project-employee.index') }}" class="text-reset">Home</a>
                        <span>/</span>
                        <a href="{{ route('project-employee.index') }}" class="text-reset"><u>Employee Projects</u></a>
                    </h6>
                </nav>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('project-employee.store') }}" method="POST">
                                @csrf
                            
                                <div class="mb-3">
                                    <label for="employee_id" class="form-label">Employee</label>
                                    <select name="employee_id" id="employee_id" class="form-control" required>
                                        @foreach ($employees as $employee)
                                            <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            
                                <div class="mb-3">
                                    <label for="project_id" class="form-label">Project</label>
                                    <select name="project_id" id="project_id" class="form-control" required>
                                        @foreach ($projects as $project)
                                            <option value="{{ $project->id }}">{{ $project->project_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            
                                <button type="submit" class="btn btn-primary">Assign</button>
                                <a href="{{ route('project-employee.index') }}" class="btn btn-secondary">Cancel</a>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection
