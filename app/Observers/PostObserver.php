<?php

namespace App\Observers;

use App\Events\PostCreated;
use App\Models\Post;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function created(Post $post)
    {
        event(new PostCreated($post));
    }


}
