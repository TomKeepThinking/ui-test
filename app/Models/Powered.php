<?php

namespace App\Models;

class Powered extends BaseModel
{
    protected $table = 'powered';

    public function projects()
    {
        $this->hasMany(Project::class);
    }
}
