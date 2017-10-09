@extends('layouts.app')
@section('title','Producto de tiendas')
@section('content')
    <div class='container text-center'>
        <div class='card product text-left'>

        @if(Auth::check() && Auth::user()->id==$products->user_id)
        <div class="absolute actions">
        <a href="{{url('products/'.$products->id.'/edit')}}">Editar</a>
                @include('products.delete',['products'=>$products])
        </div>
        @endif

        <h1>{{$products->title}}</h1>
        <div class="row">
            
            <div class="col-xs-12 col-sm-6 ">
                
            </div>
            
            <div class="col-xs-12 col-sm-6">
                <p>
                    <strong>
                        {{$products->descripcion}}
                    </strong>
                </p>
                <p>
                @include("in_shopping_cart.form",['product'=>$products])
                    
                </p>
            </div>
            
        </div>
        </div>
    </div>
@endsection