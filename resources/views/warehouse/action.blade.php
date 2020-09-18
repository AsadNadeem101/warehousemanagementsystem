<a href="warehouse/{{$id}}"><i class="fas fa-eye"></i></a>
@if($status == 'inactive')
<a href="warehouse/{{$id}}/edit"><i class="fas fa-edit"></i></a>

{!! Form::open(['method' => 'DELETE', 'route' => ['warehouse.destroy', $id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'himan']) !!}

    <button type="submit"><i class="fas fa-trash" style="color: red"></i></button>

{!! Form::close() !!}
@endif