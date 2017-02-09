<div class="container">
    @if(isset($errors)) @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
    @endforeach @endif
</div>