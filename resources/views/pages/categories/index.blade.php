@extends('master.main')

@section('content')

    @component('components.table_categories.categories', [
                       'categories' =>$categories,
                   ])
    @endcomponent

@endsection
