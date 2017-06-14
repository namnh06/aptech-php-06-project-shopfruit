@if(session('announcement'))
    <div class="alert alert-success">
        {{session('announcement')}}
    </div>
    @endif