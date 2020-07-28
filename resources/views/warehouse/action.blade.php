<a href="warehouse/{{$id}}"><i class="fas fa-eye"></i></a>
<a href="warehouse/{{$id}}/edit"><i class="fas fa-edit"></i></a>
<a href="product/add/warehouse/{{$id}}"><i class="fas fa-plus"></i></a>

{!! Form::open(['method' => 'DELETE', 'route' => ['warehouse.destroy', $id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'himan']) !!}

    <button type="submit"><i class="fas fa-trash" style="color: red"></i></button>

{!! Form::close() !!}
