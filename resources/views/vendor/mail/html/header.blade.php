@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img src="https://ik.imagekit.io/surya1810/Kraf./logo-k-dark-ok.png?updatedAt=1692963693903"
                    class="logo" alt="Kraf.">
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
