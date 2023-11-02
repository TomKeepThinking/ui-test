<?php

namespace App\Models;

class News extends BaseModel
{
    protected $table = 'blog';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'start_date',
    ];

    /**
     * Relationship: The News Categories that belong to the News
     */
    public function news_category()
    {
        return $this->belongsToMany(News_category::class, 'blog_blog_category_xrefs', 'blog_id', 'blog_category_id');
    }

    /**
     * Related projects.
     * Records related through the generic many-to-many table
     */
    public function project()
    {
        return $this->belongsToMany(Project::class, 'link_xrefs', 'source_id', 'target_id')
            ->where('link_xrefs.relationship', 'blog_project')
            ->where('link_xrefs.source_table', 'blog')
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
            ->where('link_xrefs.relationship', 'blog_blog')
            ->where('link_xrefs.source_table', 'blog')
            ->where('link_xrefs.target_table', 'blog')
            ->where('link_xrefs.online', 1)->where(function ($query) {
                $query->where('link_xrefs.deleted', 0)->orWhereNull('link_xrefs.deleted');
            });
    }

    /**
     * Accessor: Get all the News category names as a comma-separated string
     *
     * @return string
     */
    public function getNewsCategoryNamesImplodedAttribute() :String
    {
        return $this->news_category->count() ?
            $this->news_category->sortBy('name')->implode('name', ', ')
            : '';
    }
}
