@if($payment_status != 'paid')
<a href="servicecharges/{{$id}}/payment"><button type="button" class="btn btn-primary">Paid</button></a>
@elseif($payment_status == 'paid' && $system_verification == 'pending')
<p style='background-color:orange; color:white; padding:5px'>VERIFING</p>
@elseif($payment_status == 'paid' && $system_verification == 'verified')
<p style='background-color:#70b670; color:white; padding:5px '>VERIFIED</p>
@endif
