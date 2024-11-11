<?php

namespace App\View\Components\elements;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    /**
     * Create a new component instance.
     */
    public $options;
    public $type;

    /**
     * Create a new component instance.
     *
     * @param string $type
     * @return void
     */

    public function __construct($type)
    {

        $this->options = $options;
        $this->type = $type;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.elements.select');
    }
}
