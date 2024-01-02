<h1>Header Section</h1>

<p>
    {{-- @foreach ($names as $key=>$value)
        {{$key}}-{{$value}}<br>
    @endforeach --}}

    {{-- If The Array Does Not Have Any Value --}}
    @forelse ($names as $key=>$value)
        {{$key}}-{{$value}}<br>
    @empty
        <p>No Records Found</p>
    @endforelse
</p>

