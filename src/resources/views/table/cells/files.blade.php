@php
    $json=json_decode($value, true);
@endphp
<td>
    @if($json)
        @foreach($json as $file)

            <a href="{{ $options['url_prefix'].$file}}">
                <i class="fa fa-file-text-o u-text-mute u-mr-xsmall pr-2" style="float: left;"></i>
                {{$file}}
            </a>
        @endforeach
    @endif
</td>