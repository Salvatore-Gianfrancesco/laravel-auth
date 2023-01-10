@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="my-4">{{$project->name}}</h2>
    <p>{{$project->body}}</p>

    <a href="{{Route('admin.projects.index')}}" class="btn btn-primary">Indietro</a>
</div>
@endsection