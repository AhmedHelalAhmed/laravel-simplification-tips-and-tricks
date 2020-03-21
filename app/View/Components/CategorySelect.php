<?php

namespace App\View\Components;

use App\Category;
use Illuminate\View\Component;

class CategorySelect extends Component
{
    public $categories;
    public $model;
    public $name;

    /**
     * Create a new component instance.
     *
     * @param $categories
     * @param $name
     * @param $model
     */
    public function __construct($categories,$name,$model)
    {
        $this->categories = $categories;
        $this->model = $model;
        $this->name = $name;
    }

    public function isSelected(Category $category)
    {
        return (int)old('category_id',$this->model->category_id)=== $category->id ? 'selected':'';
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.category-select');
    }
}
