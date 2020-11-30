@extends('layouts.plain')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Stuff to do</div>

                <div class="card-body">
                    <ul class="list-group">
                      <li class="list-group-item"><a href="\">Go Home (here)</a></li>
                      <li class="list-group-item"><a href="\login">login as user</a></li>
                      <li class="list-group-item"><a href="\welcome">Go to post user welcome page</a></li>
                      <li class="list-group-item"><a href="\logout">Logout user</a></li>
                      <li class="list-group-item"><a href="\admin\login">login as admin</a></li>
                      <li class="list-group-item"><a href="\admin\dashboard">Go to admin dashboard</a></li>
                      <li class="list-group-item"><a href="\admin\logout">Go to admin dashboard</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
