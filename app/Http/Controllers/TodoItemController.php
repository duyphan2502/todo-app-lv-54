<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTodoItem;
use App\Http\Requests\UpdateTodoItem;
use App\Models\TodoItem;

class TodoItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTodoItem $request, TodoItem $model)
    {
        $result = $model->create($request->all());
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
    public function update(UpdateTodoItem $request, $id)
    {
        $item = TodoItem::find($id);
        if (!$item) {
            return response_with_messages('Item not exists', 404, true);
        }
        $result = $item->update($request->all());
        $error = $result ? false : true;
        $statusCode = $error ? 500 : 201;
        $message = $error ? 'Some error occurred' : 'Successful';
        return response_with_messages($message, $statusCode, $error);
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
