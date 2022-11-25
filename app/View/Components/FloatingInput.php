<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FloatingInput extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $name, $value= null, $placeholder = null, $type = 'text', $isrequired = 0)
    {
        $this->data = [
                'title'         => $title,
                'name'          => $name,
                'value'         => $value ?? old($name),
                'placeholder'   => $placeholder ?? 'Enter '. ucfirst($title),
                'type'          => $type,
                'isrequired'    => $isrequired
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.floating-input', $this->data);
    }
}
