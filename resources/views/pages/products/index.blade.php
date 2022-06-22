@extends('master.main')

@section('content')

    @component('components.table_products.products', [
                       'products' =>$products,
                   ])
    @endcomponent

@endsection
