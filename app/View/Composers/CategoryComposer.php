<?php
 
namespace App\View\Composers;
 
use App\Models\Category;
use Illuminate\View\View;
 
class CategoryComposer
{
  
    public function compose(View $view)
    {
        $category=Category::all();
        $view->with('category', $category);
    }
}