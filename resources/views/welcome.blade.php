@extends('layouts.default')

@section('content')
<div class="container">
<div class="row">
    <div class="col">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><h3>Featured Pages</h3></li>
            @foreach ($featured as $lineitem)
                <li class="list-group-item"><a href="{{ $lineitem->slug }}">{{ $lineitem->title }}</a></li>
            @endforeach
    </ul>
</div>
    <div class="col">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><h3>Recently Updated</h3></li>
            @foreach ($latest as $lineitem)
                <li class="list-group-item"><a href="{{ $lineitem->slug }}">{{ $lineitem->title }}</a></li>
            @endforeach
        </ul>
    </div>
  </div>
@endsection
