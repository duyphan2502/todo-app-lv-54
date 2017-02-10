<?php

namespace App\Http\Controllers;

use App\Models\TodoCategory;
use App\Models\TodoItem;

class AppController extends Controller
{
    public function getIndex()
    {
        $categories = TodoCategory::all();

        return view('index', compact('categories'));
    }

    public function getCategoryDetails($id)
    {
        /**
         * @var TodoCategory $category
         */
        $category = TodoCategory::find($id);
        if (!$category) {
            abort(404);
        }
        $items = $category->todoItems()->orderBy('created_at', 'DESC')->get();

        return view('category-details', compact('category', 'items'));
    }

    public function getDeleteTask($id)
    {
        $task = TodoItem::find($id);
        if (!$task) {
            abort(500, 'This task not exists');
        }
        $categoryId = $task->todo_category_id;

        $task->delete();

        return redirect()->to(route('web.category-details.get', [$categoryId]));
    }
}
