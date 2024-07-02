<?php

namespace App\Observers;

use App\Models\BlogText;

class BlogTextObserver
{
    /**
     * Handle the BlogText "created" event.
     */
    public function created(BlogText $blogText): void
    {
        //
    }

    /**
     * Handle the BlogText "updated" event.
     */
    public function updated(BlogText $blogText): void
    {
        //
    }

    /**
     * Handle the BlogText "deleted" event.
     */
    public function deleted(BlogText $blogText): void
    {
        //
    }

    /**
     * Handle the BlogText "restored" event.
     */
    public function restored(BlogText $blogText): void
    {
        //
    }

    /**
     * Handle the BlogText "force deleted" event.
     */
    public function forceDeleted(BlogText $blogText): void
    {
        //
    }
}
