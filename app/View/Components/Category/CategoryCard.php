<?php

namespace App\View\Components\Category;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryCard extends Component
{
    /**
     * Create a new component instance.
     */

    public Category $category;
    public function __construct(Category $category)
    {
        //
        $this->category = $category;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.category.category-card', ['category' => $this->category]);
    }
}
