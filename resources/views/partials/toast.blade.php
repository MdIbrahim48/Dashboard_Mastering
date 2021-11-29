
@if (session()->has('alert-success'))
<div class="alert alert-success">
    {{ session('alert-success') }}
</div>
@endif

@if (session()->has('alert-danger'))
<div class="alert alert-danger">
    {{ session('alert-danger') }}
</div>
@endif
