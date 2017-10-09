
{!! Form::open(['url'=>'/in_shopping_cart','method'=>'POST','class'=>'inline-block']) !!}
    <input type="hidden" name="product_id" value={{$product->id}}>
    <input type="submit" value="Agregar Al carrito" class="btn btn-info">
{!! Form::close() !!}
