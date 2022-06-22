@extends('master.main')

@section('content')

    @component('components.table_categories.edit-category', [
                       'category' =>$category,
                   ])
    @endcomponent

@endsection
