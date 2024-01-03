@php
    $fruits=['Apple', 'Banana', 'Orange' , 'Grapes'];
    $name="Ruban Pathak"
@endphp

<script>
    var a=@json($fruits);
    a.forEach(function(e){
        console.log(e);
    });

    console.log(a);

    var b= {{ Js::from($name) }};

    console.log(b);
</script>