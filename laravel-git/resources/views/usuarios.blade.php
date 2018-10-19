{{ $texto }}
<br>
@if ($checagem == false)

    sua mãe
<br>
@else
    seu pai
@endif
<br>
@foreach($gados as $gados)
{{$gados}}<br>
@endforeach