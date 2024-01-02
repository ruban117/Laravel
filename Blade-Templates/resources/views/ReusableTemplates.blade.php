@php
    $fruits=['Red'=>'Apple','yellow'=>'Banana','orangish'=> 'Orange','black'=> 'Grapes'];
@endphp


@include('Pages.header', ['names'=>$fruits])
<h1>Home Page</h1>

@include('Pages.footer')