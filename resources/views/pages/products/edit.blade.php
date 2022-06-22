@extends('master.main')

@section('content')

    @component('components.table_products.edit-product', [
                       'product'=>$product,
                       'projects'=>$projects,
                       'categories'=>$categories
                   ])
    @endcomponent

@endsection
