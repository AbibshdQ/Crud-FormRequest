<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Services\Project\ProjectService;
use App\Services\Project\ProjectServiceImplement;
use RealRashid\SweetAlert\Facades\Alert;

class ProjectController extends Controller
{
    protected $projectService;

    public function __construct(ProjectServiceImplement $projectService) {
        $this->projectService = $projectService;
    }

    public function index() {
        $projects = $this->projectService->getAllProjects();
        return view('project.index', compact('projects'));
    }

    public function create() {
        return view('project.create');
    }

    public function store(ProjectRequest $request) {
        $validated = $request->validated();
        $this->projectService->createProject($validated);

        Alert::success('Success', 'Project berhasil disimpan');
        return redirect()->route('project.index');
    }

    public function edit(string $id) {
        $project = $this->projectService->getProjectById($id);
        return view('project.edit', compact('project'));
    }

    public function update(ProjectRequest $request, string $id) {
        $validated = $request->validated();
        $this->projectService->updateProject($id, $validated);
        
        Alert::success('Success', 'Project berhasil diupdate');
        return redirect()->route('project.index');
    }

    public function destroy(string $id) {
        $this->projectService->deleteProject($id);
        Alert::success('Success', 'Project berhasil dihapus');
        return redirect()->route('project.index');
    }
}
