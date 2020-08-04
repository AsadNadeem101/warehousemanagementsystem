<a href="warehouseadbid/{{$id}}"><i class="fas fa-eye"></i></a>
<a href="warehouseadbid/{{$id}}/edit"><i class="fas fa-edit"></i></a>
<a href=""><i class="fas fa-check"></i></a>
{!! Form::open(['method' => 'DELETE', 'route' => ['warehouseadbid.destroy', $id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'himan']) !!}

    <button type="submit"><i class="fas fa-trash" style="color: red"></i></button>

{!! Form::close() !!}
