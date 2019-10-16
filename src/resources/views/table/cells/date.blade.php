<td>
    {{\Carbon\Carbon::parse($value)->format($options['format'])}}
    @if(isset($options['showDiff']))
        @if($options['showDiff']!='')
            @php
                $diff=App\Task::getDeadlineCountAttribute($value,$id);
            @endphp
            {!! $diff !!}
        @endif
    @endif
</td>