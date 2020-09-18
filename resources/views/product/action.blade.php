<a href="product/{{$id}}"><i class="fas fa-eye"></i></a>
<!-- <a href="product/{{$id}}/edit"><i class="fas fa-edit"></i></a> -->

{!! Form::open(['method' => 'DELETE', 'route' => ['product.destroy', $id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'himan']) !!}

    <button type="submit"><i class="fas fa-trash" style="color: red"></i></button>

{!! Form::close() !!}
