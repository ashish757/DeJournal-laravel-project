<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Posts extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $posts;
    public $user;
    public function __construct($posts, $user=null)
    {
        $this->posts = $posts;
            $this->user = $user ? $user : null;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.posts');
    }
}
