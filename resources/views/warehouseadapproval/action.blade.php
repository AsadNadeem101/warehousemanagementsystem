@if($status == 'pending')
<a href="warehouseadapproval/{{$id}}/activate"><button type="button" class="btn btn-primary">Activate</button></a>
@elseif($status == 'active')
<a href="warehouseadapproval/{{$id}}/inactivate"><button type="button" class="btn btn-danger">In Active</button></a>
@endif