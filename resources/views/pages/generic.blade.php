@extends('layouts.default')
@section('content')
    @php
     echo $page->content;
    @endphp
<a href="/welcome">Back</a>
@endsection
