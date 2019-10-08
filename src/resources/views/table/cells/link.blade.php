@if($options['type']=='json')
    @php
        $json=json_decode($value, true);
    @endphp
    <td><a href="{{ $options['url_prefix'].$json[$options['url_postfix']]}}">{{$json[$options['value']]}}</a></td>
@elseif($options['type']=='current_model_detail')
    @php
        $base_route = $table['base_route'] ?? '';
    @endphp
    <td>
        <a
                title="{{ trans('View this record') }}"
                href="{{ Route::has($base_route.'.show') ? route($base_route.'.show', $id) : '#' }}"
                data-id="{{ $value }}"
                data-action="view-item">
            {{$value}}
        </a>
    </td>
@endif