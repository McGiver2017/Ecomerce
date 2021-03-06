@extends('layouts.app')
@section('title','Producto de tiendas')
@section('content')
<div class="big-padding text-center blue-grey white-text" role="alert">
    <h1>Productos</h1>
</div>
<div class="container">
<table class="table table-bordered">
        <thead>
            <tr>         
            <td>Producto</td>
            <td>Precio</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
               <td>{{ $product->title }}</td>
                <td>{{ $product->pricing }}</td>
               </tr>
            @endforeach
            <tr>
            <td>total</td>
            <td>{{$total}}</td>
            </tr>
        </tbody>
    
    </table>
</div>
    
@endsection