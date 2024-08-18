<div>
    @if ($show)
        @teleport('body')
            @php
                $key = random_int(1, 100000);
            @endphp
        @livewire($component, $data, key($key))
        @endteleport
    @endif
</div>
