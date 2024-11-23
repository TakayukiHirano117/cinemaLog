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
        $categories = Category::all(['id', 'name'])->toArray();
        // dd($categories);
        $sortItems = [
            ['id' => 1, 'name' => '新しい順'],
            ['id' => 2, 'name' => '古い順'],
            ['id' => 3, 'name' => '評価が高い順'],
            ['id' => 4, 'name' => '評価が低い順'],
        ];
        // dd($sortItems);
        // dd(url('/icons/check.svg'));
        // dd(asset("/icons/check.svg"));

        return view('components', ['categories' => $categories, 'sortItems' => $sortItems]);
    }
}
