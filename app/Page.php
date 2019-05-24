<?php

namespace App;

use TCG\Voyager\Models\Page as VoyagerPage;


class Page extends VoyagerPage
{
    public function authorId()
    {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }

    public function isActive()
    {
        return $this->status == static::STATUS_ACTIVE;
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
