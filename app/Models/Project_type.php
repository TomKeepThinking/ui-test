<?php

namespace App\Models;

class Project_type extends BaseModel
{
    protected $table = 'project_type';

    public function projects()
    {
        return $this->hasMany(Project::class, 'project_type_id');
    }
}
