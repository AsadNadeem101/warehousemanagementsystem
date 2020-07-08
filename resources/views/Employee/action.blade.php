<a href="employee/{{$id}}"><i class="fas fa-eye"></i></a>
<a href="employee/{{$id}}/edit"><i class="fas fa-edit"></i></a>

{!! Form::open(['method' => 'DELETE', 'route' => ['employee.destroy', $id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'himan']) !!}

    <button type="submit"><i class="fas fa-trash" style="color: red"></i></button>

{!! Form::close() !!}
