<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $type;
    public $value;
    public $hidden;
    public function __construct($name, $type = 'text', $value = null, $hidden = 0)
    {
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;
        $this->hidden = $hidden;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
