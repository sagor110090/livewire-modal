<div>
    @if ($show)
        @teleport('body')
            @php
                $key = random_int(1, 100000);
            @endphp
        @livewire($component, $data, key($key))
        @endteleport
    @endif
<!--     loader  -->
<div  :style="`display: ${isLoading ? 'flex' : 'none'};`" style="display: none;" class="loader-container">
    <div class="lds-ring">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
</div>
