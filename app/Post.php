<?php

namespace App;

use TCG\Voyager\Models\Post as VoyagerPost;

class Post extends VoyagerPost
{
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Verify if a post is published
     *
     * @return bool
     */
    public function isPublished()
    {
        return $this->status == static::PUBLISHED;
    }

    public function getPreviousAttribute()
    {
        return static::published()->where('id', '<', $this->id)->orderBy('id', 'asc')->first();
    }

    public function getNextAttribute()
    {
        return static::published()->where('id', '>', $this->id)->orderBy('id', 'asc')->first();
    }
}
