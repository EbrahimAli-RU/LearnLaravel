<h1>
    {{$name}}
</h1>
<h1>
    {{$id}}
</h1>
@php
    $arr = array({id: 1, name: 'ebra'}, {id: 2, name: 'ebra'})
@endphp

@foreach ($arr as $key => $item)
    {{$key}}
@endforeach