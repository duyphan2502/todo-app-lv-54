@extends('_master')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">{{ $category->title }}</h1>
            <p class="lead">{{ $category->description }}</p>
        </div>
    </div>
    <div class="container">
        <div class="pull-right mb-4">
            <a href="#" data-toggle="modal" data-target="#create_task_modal" class="btn btn-primary">Create task</a>
        </div>
        <div class="clearfix"></div>
        <div id="accordion" role="tablist" aria-multiselectable="true" data-count="{{ $items->count() }}">
            @foreach($items as $key => $item)
                <div class="card">
                    <div class="card-header" role="tab" id="todo_item_heading_{{ $key + 1 }}">
                        <a data-toggle="collapse" data-parent="#accordion" href="#todo_item_collapse_{{ $key + 1 }}"
                           aria-expanded="{{ $key == 0 ? 'true' : 'false' }}"
                           aria-controls="todo_item_collapse_{{ $key + 1 }}">
                            {{ $item->title }}
                        </a>
                        <div class="pull-right">
                            <span class="custom-checkbox">
                                <input type="checkbox" data-id="{{ $item->id }}">
                                <label><i class="fa fa-check"></i></label>
                            </span>
                            <a href="{{ route('web.delete-task.get', [$item->id]) }}" class="btn btn-danger btn-sm"><i
                                        class="fa fa-trash"></i></a>
                        </div>
                    </div>
                    <div id="todo_item_collapse_{{ $key + 1 }}"
                         class="collapse {{ $key == 0 ? 'show' : '' }}"
                         role="tabpanel"
                         aria-labelledby="todo_item_heading_{{ $key + 1 }}">
                        <div class="card-block">
                            {{ $item->description }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('modals')
    <div class="modal fade" id="create_task_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form class="modal-content create-task-form" action="{{ route('todo-item.store') }}" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Create task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-body">
                        <input type="hidden" name="todo_category_id" value="{{ $category->id }}">
                        <input type="hidden" name="status" value="doing">
                        <div class="form-group row">
                            <label for="create_task_title" class="col-2 col-form-label">Title</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="" id="create_task_title" name="title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="create_task_description" class="col-2 col-form-label">Description</label>
                            <div class="col-10">
                            <textarea name="description"
                                      id="create_task_description"
                                      class="form-control"
                                      cols="30"
                                      rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-cancel" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-warning btn-save-category">Save changes</button>
                </div>
            </form>
        </div>
    </div>
@endsection