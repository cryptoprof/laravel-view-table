<td>
    {{\Carbon\Carbon::parse($value)->format($options['format'])}}
    @if($options['showDiff']!='')
        @php
            $diff=App\Task::getDeadlineCountAttribute($value,$id);
        @endphp
        {!! $diff !!}
    @endif
</td>