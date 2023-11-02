<?php

namespace App\Models;

class News_category extends BaseModel
{
    protected $table = 'blog_category';

    /**
     * The News that belong to the News Category
     */
    public function news()
    {
        return $this->belongsToMany(News_category::class, 'blog_blog_category_xrefs', 'blog_category_id', 'blog_id');
    }
}
