<?php

namespace App\Models;

use Illuminate\Support\Str;

class Project extends BaseModel
{
    protected $table = 'project';

    // Eager load with below, used in both List and Single views
    protected $with = ['client'];

    // const CREATED_AT = 'created_om';
    // const UPDATED_AT = 'updated_on';

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function powered()
    {
        return $this->belongsTo(Powered::class, 'powered_id');
    }

    public function project_type()
    {
        return $this->belongsTo(Project_type::class, 'project_type_id');
    }

    /**
     * Related projects.
     * Records related through the generic many-to-many table
     */
    public function project()
    {
        return $this->belongsToMany(Project::class, 'link_xrefs', 'source_id', 'target_id')
        ->where('link_xrefs.relationship', 'project_project')
        ->where('link_xrefs.source_table', 'project')
        ->where('link_xrefs.target_table', 'project')
        ->where('link_xrefs.online', 1)->where(function ($query) {
            $query->where('link_xrefs.deleted', 0)->orWhereNull('link_xrefs.deleted');
        });
    }

    /**
     * Related news.
     * Records related through the generic many-to-many table
     */
    public function news()
    {
        return $this->belongsToMany(News::class, 'link_xrefs', 'source_id', 'target_id')
        ->where('link_xrefs.relationship', 'project_blog')
        ->where('link_xrefs.source_table', 'project')
        ->where('link_xrefs.target_table', 'blog')
        ->where('link_xrefs.online', 1)->where(function ($query) {
            $query->where('link_xrefs.deleted', 0)->orWhereNull('link_xrefs.deleted');
        });
    }

    /**
     * Accessor: Get all short intro text based on bodytext
     *
     * @return string
     */
    public function getIntroAttribute() :String
    {
        return !empty($this->bodytext) ? Str::limit(strip_tags($this->bodytext), 250, '...') : '';
    }
}
