<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputField extends Component
{
    public $name;
    public $model;

    /**
     * Create a new component instance.
     *
     * @param $model
     * @param $name
     */
    public function __construct($model,$name)
    {
        $this->model = $model;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.input-field');
    }
}
