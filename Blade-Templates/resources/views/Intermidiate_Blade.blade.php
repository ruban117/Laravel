{{-- Loop Variables --}}

@php
    $names=['Ruban', 'Soumita', 'Altab', 'Sovon', 'Samarpita'];
@endphp
<ul>
    @foreach ($names as $n)
        @if ($loop->first)
            <li style="color: blue">{{ $n }}</li>
        @elseif($loop->last)
            <li style="color: green">{{ $n }}</li>
        @else
        <li>{{ $n }}</li>
        @endif
    @endforeach

</ul><br><br>

<ul>
    @foreach ($names as $n)
        @if ($loop->even)
            <li style="color: blue">{{ $n }}</li>
        @elseif($loop->odd)
            <li style="color: green">{{ $n }}</li>
        @else
        <li>{{ $n }}</li>
        @endif
    @endforeach

</ul>