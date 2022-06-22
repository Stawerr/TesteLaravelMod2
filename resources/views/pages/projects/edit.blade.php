@extends('master.main')

@section('content')

    @component('components.table_projects.edit-project', [
                       'project' =>$project,
                   ])
    @endcomponent

@endsection
