{!! Form::open(['url'=>$url,'method' => $method]) !!}
        <div class="form-group">        
        {!! Form::text('title', $product->title, ['class'=>'form-control','placeholder'=>'Titulo...']) !!}
        </div>
        <div class="form-group">        
        {!! Form::number('pricing', $product->pricing, ['class'=>'form-control','placeholder'=>'Precio de su producto en centavos de dolar...']) !!}
        </div>
        <div class="form-group">        
        {!! Form::textarea('descripcion', $product->descripcion, ['class'=>'form-control','placeholder'=>'Describe tu producto...']) !!}
        </div>
        <div class="form-group text-right">        
        <a href="{{url('/products')}}">Regresar al listado de producto</a></div>
        <input type="submit" value="Enviar" class="btn btn-success">
{!! Form::close() !!}