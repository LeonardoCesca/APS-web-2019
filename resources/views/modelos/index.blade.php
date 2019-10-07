@extends('layout.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        @foreach($modelos as $modelo)
            <h3>Modelo: {{ $modelo->modelo }}</h3>
        @endforeach
    </div>
</div>
@endsection