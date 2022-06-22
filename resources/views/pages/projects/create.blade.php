@extends('master.main')

@section('content')

    @component('components.table_projects.project-form-create', [
                       'projects' =>$projects,
                   ])
    @endcomponent

@endsection
