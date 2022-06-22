@extends('master.main')

@section('content')

    @component('components.table_projects.projects', [
                       'projects' =>$projects,
                   ])
    @endcomponent

@endsection
