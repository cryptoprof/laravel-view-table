<td class="c-table__cell text-center {{$field}}">
    @if($value)
        {{\Carbon\Carbon::parse($value)->format($options['format'])}}
    @endif
    @if(isset($options['showDiff']))
        @if($options['showDiff']!='')
            @php
                $diff=App\Task::getDeadlineCountAttribute($value,$id);
            @endphp
            {!! $diff !!}
        @endif
    @endif
</td>