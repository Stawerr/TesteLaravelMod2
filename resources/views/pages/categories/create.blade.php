@extends('master.main')

@section('content')

    @component('components.table_categories.category-form-create', [
                       'categories' =>$categories,
                   ])
    @endcomponent

@endsection
