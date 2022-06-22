@extends('master.main')

@section('content')

    @component('components.table_products.product-form-create', [
                       'products' =>$products,
                       'projects' =>$projects,
                       'categories' =>$categories,
                   ])
    @endcomponent

@endsection
