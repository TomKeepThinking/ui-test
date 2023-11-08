<?php

namespace App\Models;

use resources\Project;

class Page extends BaseModel
{
    protected $table = 'pages';

    // Eager load
    protected $with = ['page_template', 'node'];

    public function page_template()
    {
        return $this->belongsTo(Page_template::class, 'page_template_id');
    }

    public function node()
    {
        return $this->belongsTo(Node::class, 'node_id');
    }

    public function accordion()
    {
        return $this->belongsToMany(Accordion::class, 'link_xrefs', 'source_id', 'target_id')
            ->where('accordion.online', 1)->where(function ($query) {
                $query->where('accordion.deleted', 0)->orWhereNull('accordion.deleted');
            })
            ->where('link_xrefs.relationship', 'page_accordion')
            ->where('link_xrefs.source_table', 'pages')
            ->where('link_xrefs.target_table', 'accordion')
            ->where('link_xrefs.online', 1)->where(function ($query) {
                $query->where('link_xrefs.deleted', 0)->orWhereNull('link_xrefs.deleted');
            })
            ->orderBy('link_xrefs.rank');
    }

    /**
     * The Pages that belong to a Page.
     * Records related through the generic many-to-many table
     */
    public function related_pages()
    {
        return $this->belongsToMany(Page::class, 'link_xrefs', 'source_id', 'target_id')
            ->select('pages.*', 'link_xrefs.name as xref_name', 'link_xrefs.caption as xref_caption')
            ->where('pages.online', 1)->where(function ($query) {
                $query->where('pages.deleted', 0)->orWhereNull('pages.deleted');
            })
            ->where('link_xrefs.relationship', 'page_page')
            ->where('link_xrefs.source_table', 'pages')
            ->where('link_xrefs.target_table', 'pages')
            ->where('link_xrefs.online', 1)->where(function ($query) {
                $query->where('link_xrefs.deleted', 0)->orWhereNull('link_xrefs.deleted');
            });
    }

    /**
     * The Projects that belong to a Page.
     * Records related through the generic many-to-many table
     */
    public function project()
    {
        return $this->belongsToMany(Project::class, 'link_xrefs', 'source_id', 'target_id')
            ->where('project.online', 1)->where(function ($query) {
                $query->where('project.deleted', 0)->orWhereNull('project.deleted');
            })
            ->where('link_xrefs.relationship', 'page_project')
            ->where('link_xrefs.source_table', 'pages')
            ->where('link_xrefs.target_table', 'project')
            ->where('link_xrefs.online', 1)->where(function ($query) {
                $query->where('link_xrefs.deleted', 0)->orWhereNull('link_xrefs.deleted');
            });
    }
}
