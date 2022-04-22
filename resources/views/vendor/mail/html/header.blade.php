<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
            <img src="https://lh3.googleusercontent.com/a-/AOh14Ggoa3XowMBbzuQeICcMUi0RRhUp2gxA3FV0u4OJSw=s96-c-rg-br100" class="logo" alt="Hotel Logo">
            @else
            {{ $slot }}
            @endif
        </a>
    </td>
</tr>