<td>
    {{\Carbon\Carbon::parse($value)->format($options['format'])}}
    @if(isset($options['showDiff']))
        @php
            $diff=App\Task::getDeadlinCountAttribute($value);
        @endphp
        {!! $diff !!}
    @endif
</td>