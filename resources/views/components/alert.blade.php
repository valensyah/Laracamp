@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-dismissable fade show" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif