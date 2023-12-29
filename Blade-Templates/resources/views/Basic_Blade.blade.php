{{-- Print Statement  --}}

{{ "Hello World" }}<br><br>

{{-- To Print A Variable --}}

@php
    $name="Ruban";
@endphp

{{ $name }}<br><br>

{{-- If Else Conditional Statement --}}

@php
    $age=30;
@endphp

@if ($age < 9)
    {{ "You Are A Kid" }}
@elseif ($age < 18 )
    {{ "You Are Not Eligible" }}
@else
    {{ "You Are Eligible For Voting" }}
    
@endif <br><br>


{{-- Loops --}}

@for($i=1;$i<=10;$i++)
    {{ $i }}
@endfor