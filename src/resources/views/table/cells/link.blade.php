@php
    $json=json_decode($value, true);
@endphp
<td><a href="{{ $options['url_prefix'].$json[$options['url_postfix']]}}">{{$json[$options['value']]}}</a></td>