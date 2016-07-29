@if($errors)
    @if($errors->count() > 0)
        <div class="alert alert-danger alert-with-icon">
            <span data-notify="icon" class="ti-close"></span>
            <b>Oh No!</b>
            @foreach($errors->all() as $message)
                <p>{{ $message }}</p>
            @endforeach
        </div>
    @endif
@endif

@if(session()->has('success'))
    <div class="alert alert-success alert-with-icon">
        <span data-notify="icon" class="ti-check"></span>
        <b>Awesome Work!</b>
        @foreach(session()->get('success') as $message)
            <p>{{ $message }}</p>
        @endforeach
    </div>
@endif