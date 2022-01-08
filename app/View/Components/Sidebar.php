<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\User;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $active;
    public function __construct($active)
    {
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $id = session("id");
        $user = User::find($id);

        return view("components.sidebar", ["user" => $user]);
    }
}
