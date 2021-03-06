<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTodoCategory;
use App\Models\TodoCategory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class TodoCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TodoCategory $categories)
    {
        return response_with_messages('Fetched done', 200, false, $categories->all()->toArray());
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @param TodoCategory|Builder $category
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTodoCategory $request, TodoCategory $category)
    {
        $result = $category->create($request->all());
        $error = $result ? false : true;
        $statusCode = $error ? 500 : 201;
        $message = $error ? 'Some error occurred' : 'Successful';
        return response_with_messages($message, $statusCode, $error, $result->toArray());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
