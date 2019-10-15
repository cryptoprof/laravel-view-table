@php
    $json=json_decode($value, true);
    $base_route = $table['base_route'] ?? '';

@endphp
<td>
    @if($json)
        @foreach($json as $file)
            <div class="col-12">
                {{--Отображение файла в модалке, например для отображения google docs--}}
                @if(isset($options['extra_type']))
                    @if($options['extra_type']=='modal')
                        <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg{{$id}}"
                           onclick="$('#loadfile{{$id}}').load('/files/show?{{$base_route}}_id={{$id}}');">
                            <i class="fa fa-file-text-o u-text-mute u-mr-xsmall pr-2" style="float: left;"></i>
                            {{$file}}
                        </a>
                        <div class="modal fade bd-example-modal-lg{{$id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div id="loadfile{{$id}}" class="mt-3"></div>
                                </div>
                            </div>
                        </div>
                    @endif
                @else
                    <a href="{{ $options['url_prefix'].$file}}">
                        <i class="fa fa-file-text-o u-text-mute u-mr-xsmall pr-2" style="float: left;"></i>
                        {{$file}}
                    </a>
                @endif
            </div>
        @endforeach
    <!-- Large modal -->


    @endif

</td>