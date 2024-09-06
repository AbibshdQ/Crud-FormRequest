<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectEmployee extends Model
{
    protected $table = 'employee_project';
    
    protected $fillable = [
        'employee_id',
        'project_id',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
