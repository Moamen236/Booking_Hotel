@if($errors->any())
    <div class="alert alert-danger mt-4 mb-0">
        <p> <strong>  You have something missing</strong></p>
        <ul>
            @foreach ($errors->all() as $error)
                <li> {{$error}} </li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('status'))
    <div class="alert alert-success mt-4 mb-0">
        {{ session('status') }}
    </div>
@endif


@if(session('success'))
    <div class="alert alert-success alert-dismissible mt-4 mb-0">
        <i class="icon fas fa-check"></i> {{ session('success') }}
    </div>
@endif