@php
    $columns = $table['columns'] ?? [];
    $request = request()->all() ?? [];
@endphp
<thead class="c-table__head c-table__head--slim">
    <tr class="c-table__row">
        @foreach($columns as $column)
            <th
                    @if(isset($column['sortable']) && $column['sortable'])
                        class="c-table__cell text-center c-table__cell--head sortable {{ $column['field'] }}" data-sort="{{ $column['field'] }}"
                    @else
                        class="c-table__cell text-center c-table__cell--head"
                    @endif
            >
                {{ $column['title'] ?? '' }}
                @if(isset($column['sortable']) && $column['sortable'])
                    @if(isset($request['sort_by']) && $request['sort_by'] == $column['field'])
                        <i class="fa fa-sort-{{ ($request['sort'] == 'asc') ? 'up' : 'down'}}"></i>
                    @else
                        <i class="fa fa-sort"></i>
                    @endif
                @endif
            </th>
        @endforeach
    </tr>
</thead>