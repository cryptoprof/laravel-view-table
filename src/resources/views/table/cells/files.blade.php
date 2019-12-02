@php
    $json=json_decode($value, true);
    $base_route = $table['base_route'] ?? '';

@endphp
<td class="c-table__cell text-center">
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
                        <div class="c-modal c-modal--xlarge modal fade bd-example-modal-lg{{$id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="c-modal__dialog modal-dialog">
                                <div class="modal-content">
                                    <header class="c-modal__header">
                                        <h1 class="c-modal__title">Приложения к поручению</h1>
                                        <span class="c-modal__close" data-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-close"></i>
                                    </span>
                                    </header>
                                    <div class="c-modal__body u-text-center u-pb-small">
                                        <div id="loadfile{{$id}}" class="mt-3"></div>

                                    </div>

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