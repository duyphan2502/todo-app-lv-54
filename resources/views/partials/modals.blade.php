<div class="modal fade" id="create_category_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form create-category-form" data-href="{{ route('todo-category.store') }}">
                    <div class="form-group row">
                        <label for="create_category_title" class="col-2 col-form-label">Title</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="" id="create_category_title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="create_category_description" class="col-2 col-form-label">Description</label>
                        <div class="col-10">
                            <textarea name=""
                                      id="create_category_description"
                                      class="form-control"
                                      cols="30"
                                      rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-cancel" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-warning btn-save-category">Save changes</button>
            </div>
        </div>
    </div>
</div>
