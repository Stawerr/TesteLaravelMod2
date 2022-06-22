@extends('master.main')

@section('content')

    @component('components.table_projects.oneProject', [
                       'project' =>$project,
                   ])
    @endcomponent

@endsection
