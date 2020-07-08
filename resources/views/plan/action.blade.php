<a href="plan/{{$id}}"><i class="fas fa-eye"></i></a>
<a href="plan/{{$id}}/edit"><i class="fas fa-edit"></i></a>

{!! Form::open(['method' => 'DELETE', 'route' => ['plan.destroy', $id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'himan']) !!}

    <button type="submit"><i class="fas fa-trash" style="color: red"></i></button>

{!! Form::close() !!}
