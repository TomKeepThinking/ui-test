<?php

namespace App\Models;

use resources\Project;

class Client extends BaseModel
{
    protected $table = 'client';

    public function project()
    {
        return $this->hasMany(Project::class, 'client_id');
    }
}
