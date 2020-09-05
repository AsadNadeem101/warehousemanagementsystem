@if($paid == '0')
<a href="tenantrent/{{$id}}/payment"><button type="button" class="btn btn-primary">Paid</button></a>
@elseif($paid != '0')
<p>Verfying</p>
@endif
