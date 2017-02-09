<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TodoCategory extends Model
{
    protected $table = 'todo_categories';

    protected $primaryKey = 'id';

    protected $fillable = ['title', 'description'];

    public $timestamps = true;

    public function todoItems()
    {
        return $this->hasMany(TodoItem::class, 'todo_category_id');
    }
}
