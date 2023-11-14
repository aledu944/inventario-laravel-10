<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderPage extends Component
{

    public $path;
    public $title;
    public $button;
    public $description;

    /**
     * Create a new component instance.
     */
    public function __construct($title, $description, $path, $button)
    {
        $this->path = $path;
        $this->title = $title;
        $this->button = $button;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header-page');
    }
}
