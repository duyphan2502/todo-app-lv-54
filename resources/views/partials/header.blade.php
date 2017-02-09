<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
    <button class="navbar-toggler navbar-toggler-right"
            type="button"
            data-toggle="collapse"
            data-target="#navbarCollapse"
            aria-controls="navbarCollapse"
            aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ route('web.index.get') }}">Todo App</a>
    <div class="collapse navbar-collapse" id="navbarCollapse">

    </div>
    <div class="form-inline mt-2 mt-md-0">
        <a class="btn btn-success my-2 my-sm-0"
           data-toggle="modal"
           data-target="#create_category_modal"
           href="#">Create category</a>
    </div>
</nav>