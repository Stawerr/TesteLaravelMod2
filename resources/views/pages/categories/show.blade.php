@extends('master.main')

@section('content')

    @component('components.table_categories.oneCategory', [
                       'category' =>$category,
                   ])
    @endcomponent

@endsection
