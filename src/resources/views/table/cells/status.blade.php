<td class="c-table__cell text-center">
    @if($value)
        <span class="c-badge c-badge--small " style="background: {{\App\Classess\Helpers\StatusConfig::$STATUS[$value]['color']}};
                                   color: {{\App\Classess\Helpers\StatusConfig::$STATUS[$value]['font-color']}}"
        >{{ $value }}</span>
    @endif
</td>