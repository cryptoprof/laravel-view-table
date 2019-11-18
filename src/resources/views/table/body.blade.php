@php
    $columns = $table['columns'] ?? [];
    $data = $table['data'] ?? [];
@endphp
<tbody>
@foreach($data as $item)
    <tr class="c-table__row c-table__row--danger">
        @foreach($columns as $column)
            @php
                $cell = isset($column['cell']) ?
                    (View::exists('table.cells.'.$column['cell']) || View::exists('scuti::table.cells.'.$column['cell'])
                        ? $column['cell'] : 'text')
                    : 'text';
                $value = isset($column['field'])
                    ? ($item[$column['field']] ?? null)
                    : ($item['id'] ?? null);
                $options = $column['options'] ?? [];
                $id = $item['id'];
            @endphp
            @includeFirst(['table.cells.'.$cell, 'scuti::table.cells.'.$cell ], compact('value', 'table', 'options','id'))
        @endforeach
    </tr>
@endforeach
</tbody>