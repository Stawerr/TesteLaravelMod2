@extends('master.main')

@section('content')

    @component('components.table_products.oneProduct', [
                       'product' =>$product,
                   ])
    @endcomponent

@endsection
