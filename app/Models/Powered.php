<?php

namespace App\Models;

use resources\Project;

class Powered extends BaseModel
{
    protected $table = 'powered';

    public function projects()
    {
        $this->hasMany(Project::class);
    }
}
