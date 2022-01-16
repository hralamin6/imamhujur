<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img class="h-12" src="{{\App\Models\Setup::first()->getFirstMediaUrl('logo')}}" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
