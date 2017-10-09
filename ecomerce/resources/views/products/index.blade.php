@extends('layouts.app')
@section('title','Producto de tiendas')
@section('content')
<section>
<div class="big-padding text-center blue-grey white-text" role="alert">
    <h1>Productos</h1>
</div>
<div class="container">
<div class="card">
  <div class="card-body">
  <table class="table table-bordered">
        <thead>
            <tr>
            <td>ID</td>
            <td>Titulo</td>
            <td>Descripcion</td>
            <td>Precion</td>
            <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $products)
                <tr>
                <td>{{ $products->id }}</td>
                <td>{{ $products->title }}</td>
                <td>{{ $products->descripcion }}</td>
                <td>{{ $products->pricing }}</td>
                <td>
                <a href="{{url('products/'.$products->id)}}">Ver</a>
                <a href="{{url('products/'.$products->id.'/edit')}}">Editar</a>
                @include('products.delete',['products'=>$products])</td>
                
                </tr>
            @endforeach
        </tbody>
    
    </table>
  </div>
</div>
    
    
    </div>
</div>

</section>
<div class="floating"> 
<a href="{{url('/products/create')}}" class="btn btn-success btn-fab">
    <i class="material-icons">add</i>
</a>
</div>
@endsection