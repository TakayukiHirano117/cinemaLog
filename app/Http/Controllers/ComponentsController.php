<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $categories = Category::all();
        $sortItems = [
            'newer' => '新しい順',
            'older' => '古い順',
            'better' => '評価が高い順',
            'worse' => '評価が低い順'
        ];

        return view('components', ['categories' => $categories, 'sortItems' => $sortItems]);
    }
}
