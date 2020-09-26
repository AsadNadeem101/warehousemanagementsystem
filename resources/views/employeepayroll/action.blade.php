@if($status != 'paid')
<a href="salaries/{{$id}}/payment"><button type="button" class="btn btn-primary">PAY</button></a>
@else
<p style='background-color:green; color:white; padding:5px'>PAID</p>
@endif()
