@if($status == 'inactive')
<a href="warehouseregistration/{{$id}}/activate"><button type="button" class="btn btn-primary">Activate</button></a>
@elseif($status == 'active')
<a href="warehouseregistration/{{$id}}/inactivate"><button type="button" class="btn btn-danger">In Active</button></a>
@endif