<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
    protected $table = 'todo_items';

    protected $primaryKey = 'id';

    protected $fillable = ['title', 'description', 'todo_category_id', 'status'];

    public $timestamps = true;
}
