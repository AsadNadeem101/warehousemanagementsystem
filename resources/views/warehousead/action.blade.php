<a href="warehousead/{{$id}}"><i class="fas fa-eye"></i></a>

<!-- <a href="warehousead/{{$id}}/edit"><i class="fas fa-edit"></i></a> -->

<a href="product/add/warehouse/{{$id}}"><i class="fas fa-plus"></i></a>

@if($status != 'inactive')
{!! Form::open(['method' => 'DELETE', 'route' => ['warehousead.destroy', $id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'himan']) !!}

    <button type="submit"><i class="fas fa-trash" style="color: red"></i></button>

{!! Form::close() !!}

@endif