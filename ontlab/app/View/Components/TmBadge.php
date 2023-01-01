<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TmBadge extends Component
{
    public $username;
    public $uid;
    public $level;
    public $img;
    public $twitter;
    public $facebook;
    public $linkedin;
    public $insta;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    
    public function __construct($uid, $username, $level, $img, $twitter="",$facebook="",$linkedin="",$insta="")
    {
        //
        $this->uid = $uid;
        $this->username = $username;
        $this->level = $level;
        $this->img = $img;
        $this->linkedin = $linkedin;
        $this->facebook = $facebook;
        $this->insta=$insta;
        $this->twitter=$twitter;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tm-badge');
    }
}