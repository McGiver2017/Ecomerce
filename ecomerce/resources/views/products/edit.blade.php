@extends('layouts.app')
@section('title','Producto de tiendas')
@section('content')
    <div class="container panel panel-default">
    <h1>Editar Producto</h1>
    @include('products.form',['product'=>$product,'url'=>'/products/'.$product->id,'method' => 'PATCH'])
    
    
    </div>
@endsection